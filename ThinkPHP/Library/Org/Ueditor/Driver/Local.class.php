<?php
namespace Org\Ueditor\Driver;
/**
 * UE 本地驱动
 * @author Mr.Old <lostphper@sina.com> 2014-09-22 21:30
 */
class Local{
  /**
   * 上传文件根目录
   * @var string
   */
  private $rootPath;

  /**
   * 本地上传错误信息
   * @var string
   */
  private $error = ''; //上传错误信息

  /**
   * 构造函数，用于设置上传根路径
   */
  public function __construct($config = null){

  }

  /**
   * 检测上传根目录
   * @param string $rootpath   根目录
   * @return boolean true-检测通过，false-检测失败
   */
  public function checkRoot($rootpath){
    if(!(is_dir($rootpath) && is_writable($rootpath))){
      $this->error = '上传根目录不存在！请尝试手动创建:'.$rootpath;
      return false;
    }
    $this->rootPath = $rootpath;
    return true;
  }

  /**
   * 检测上传目录
   * @param  string $savepath 上传目录
   * @return boolean          检测结果，true-通过，false-失败
   */
  public function checkSavePath($savepath){
    /* 检测并创建目录 */
    if (!$this->mkdir($savepath)) {
      return false;
    } else {
      /* 检测目录是否可写 */
      if (!is_writable($this->rootPath . $savepath)) {
        $this->error = '上传目录 ' . $savepath . ' 不可写！';
        return false;
      } else {
        return true;
    	}
    }
  }

  /**
   * 保存指定文件
   * @param  array   $file    保存的文件信息
   * @param  boolean $replace 同名文件是否覆盖
   * @return boolean          保存状态，true-成功，false-失败
   */
  public function save(&$file, $replace=true) {
    $filename = $this->rootPath . $file['save_path'] . $file['save_name'];

    /* 不覆盖同名文件 */ 
    if (!$replace && is_file($filename)) {
      $this->error = '存在同名文件' . $file['save_name'];
      return false;
    }

    /* 移动文件 */
    if (!move_uploaded_file($file['tmp_name'], $filename)) {
      $this->error = '文件上传保存错误！';
      return false;
    }
    $url = trim($filename, '/');
    $url = trim($filename, './');
    $file['url'] = __ROOT__ . '/' . $url;
    return true;
  }

  /**
   * 保存stream文件
   * @param  array $file    文件信息
   * @param  string $data    文件内容
   * @param  bool $replace 同名文件是否覆盖
   * @return bool          保存状态，true-成功 | false-失败
   */
  public function  put(&$file, $data, $replace = true) {
    $filename = $this->rootPath . $file['save_path'] . $file['save_name'];

    /* 不覆盖同名文件 */ 
    if (!$replace && is_file($filename)) {
      $this->error = '存在同名文件' . $file['save_name'];
      return false;
    }

    /* 移动文件 */
    if (!file_put_contents($filename, $data)) {
      $this->error = '文件上传保存错误！';
      return false;
    }
    $url = trim($filename, '/');
    $url = trim($filename, './');
    $file['url'] = __ROOT__ . '/' . $url;
    return true;
  }

  /**
   * 列出子目录下，指定类型的文件
   * @param string $path 子目录名
   * @param string $allow_files 文件类型
   * @return array 文件列表
   */
  public function listFile($path, $allow_files = array('.png','.jpg')) {
    $path = $this->rootPath . (substr($path, 0, 1) == "/" ? "":"/") . $path;
    return $this->getList($path, $allow_files);
  }

  /**
   * 创建目录
   * @param  string $savepath 要创建的目录
   * @return boolean          创建状态，true-成功，false-失败
   */
  public function mkdir($savepath){
    $dir = $this->rootPath . $savepath;
    if(is_dir($dir)){
      return true;
    }

    if(mkdir($dir, 0777, true)){
      return true;
    } else {
      $this->error = "目录 {$savepath} 创建失败！";
      return false;
    }
  }

  /**
   * 获取指定目录下，指定类型的文件列表
   * @param  string $path        目录名
   * @param  array  $allow_files 文件类型
   * @return array 文件列表
   */
  private function getList($path, $allow_files = array('.png','.jpg'), &$files = array()) {
    if (!is_dir($path)) return null;
    if(substr($path, strlen($path) - 1) != '/') $path .= '/';

    $dir_list = scandir($path);  //返回文件和目录。
    foreach ($dir_list  as $key => $file) {
      if ($file != '.' && $file != '..'){
        $file = $path . $file;
        if (!is_dir($file)) {  //如果是文件
          $extension = "";
          $extpos = strrpos($file, '.');

          //获取文件扩展名
          if ($extpos !== false) {
            $extension = substr($file,$extpos,strlen($file)-$extpos); 
          }
          $extension=strtolower($extension);
          if(in_array($extension, $allow_files)) {
            $file = trim($file, './');
            $file = trim($file, '/');
            $files[] = array(
              'url'   => __ROOT__ . '/' . $file,
              'mtime' => filemtime($file),
            );
          }
        } else {   //如果是目录
          $this->getList($file, $allow_files, $files);
        }
      }
    }
    return $files;
  }

  /**
   * 获取domain地址，主要用于修改配置文件，解决UE远程图片抓取的bug
   * 本地环境无需获取，可以忽略
   */
  public function getDomainUrl($domain) {
    return false;
  }

  /**
   * 获取headers
   * @param string $url 目标url
   * @return array headers信息
   */
  public function getHeaders($url){
    return get_headers($url, 1);
  } 

  /**
   * 获取最后一次上传错误信息
   * @return string 错误信息
   */
  public function getError(){
    return $this->error;
  }

}
