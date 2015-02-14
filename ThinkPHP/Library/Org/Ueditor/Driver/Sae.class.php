<?php
namespace Org\Ueditor\Driver;
/**
 * UE SAE驱动
 * @author Mr.Old <lostphper@sina.com> 2014-10-05 20:37
 */
class Sae{
  /**
   * Storage的Domain
   * @var string
   */
  private $domain     =   '';

  private $rootPath   =   '';

  /**
   * 本地上传错误信息
   * @var string
   */
  private $error      =   ''; 

  /**
   * 构造函数，设置storage的domain， 如果有传配置，则domain为配置项，如果没有传domain为第一个路径的目录名称。 
   * @param mixed $config 上传配置     
   */
  public function __construct($config = null){
    if(is_array($config) && !empty($config['domain'])){
      $this->domain   =   strtolower($config['domain']);
    }
  }

  /**
   * 检测上传根目录
   * @param string $rootpath   根目录
   * @return boolean true-检测通过，false-检测失败
   */
  public function checkRoot($rootpath){
    $rootpath = trim($rootpath,'./');
    if(!$this->domain){
      $rootpath = explode('/', $rootpath);
      $this->domain = strtolower(array_shift($rootpath));  //此处是亮点啊。。。
      $rootpath = implode('/', $rootpath);
    }

    $this->rootPath =  $rootpath;
    $st =   new \SaeStorage();
    if(false===$st->getDomainCapacity($this->domain)){
      $this->error  =   '您好像没有建立Storage的domain['.$this->domain.']';
      return false;
    }
    return true;
  }

  /**
   * 检测上传目录
   * @param  string $savepath 上传目录
   * @return boolean          检测结果，true-通过，false-失败
   */
  public function checkSavePath($savepath){
    return true;
  }

  /**
   * 保存指定文件
   * @param  array   $file    保存的文件信息
   * @param  boolean $replace 同名文件是否覆盖
   * @return boolean          保存状态，true-成功，false-失败
   */
  public function save(&$file, $replace=true) {
    $filename = ltrim($this->rootPath .'/'. $file['save_path'] . $file['save_name'],'/');
    $st =   new \SaeStorage();
    /* 不覆盖同名文件 */ 
    if (!$replace && $st->fileExists($this->domain,$filename)) {
      $this->error = '存在同名文件' . $file['savename'];
      return false;
    }

    /* 移动文件 */
    if (!$st->upload($this->domain,$filename,$file['tmp_name'])) {
      $this->error = '文件上传保存错误！['.$st->errno().']:'.$st->errmsg();
      return false;
    }else{
      $file['url'] = $st->getUrl($this->domain, $filename);
    }
    return true;
  }

  /**
   * 文件写入
   * @param  array  $file    文件信息数组
   * @param  string  $data    文件内容
   * @param  boolean $replace 是否覆盖
   * @return boolean  保存状态，true-成功 | false-失败
   */
  public function put(&$file, $data, $replace = true) {
    $filename = ltrim($this->rootPath .'/'. $file['save_path'] . $file['save_name'],'/');
    $st =   new \SaeStorage();
    /* 不覆盖同名文件 */ 
    if (!$replace && $st->fileExists($this->domain,$filename)) {
      $this->error = '存在同名文件' . $file['savename'];
      return false;
    }

    /* 写入文件 */
    if (false !== ($url = $st->write($this->domain, $filename, $data))) {
      $file['url'] = $url;
    } else {
      $this->error = '文件上传保存错误！['.$st->errno().']:'.$st->errmsg();
      return false;
    }
    return true;
  }

  /**
   * 列出子目录下，指定类型的文件
   * @param string $path 子目录名
   * @param string $allow_files 文件类型
   * @return array 文件列表
   */
  public function listFile($path, $allow_files = array('.png','.jpg')) {
    $path = trim($this->rootPath .'/'. $path, '/');
    $st = new \SaeStorage();
    $list = $st->getListByPath($this->domain, $path, 1000, 0, false);

    $files = array();
    if ($list) {
      foreach ($list as $file) {
        //返回指定类型
        $ext = strtolower(strrchr($file['Name'], '.'));
        if (in_array($ext, $allow_files)) {
          $files[] = array(
            'url'   => $st->getUrl($this->domain, $file['fullName']),
            'mtime' => $file['uploadTime'],
          );
        }
      }
    }
    return $files; 
  }

  public function mkdir(){
    return true;
  }

  /**
   * 获取domain地址，主要用于修改配置文件，解决UE远程图片抓取的bug
   * @param string $root 根目录
   * @return  multitype domain访问地址 | false
   */
  public function getDomainUrl($root) {
    $root = trim($root,'./');
    $root = explode('/', $root);
    $domain = strtolower(array_shift($root));
    $st =   new \SaeStorage();
    return $st->getUrl($domain);
  }

  /**
   * 获取headers
   * @param string $url 目标url
   * @return array headers信息
   */
  public function getHeaders($url){
    //curl获取header信息字符串
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    $header = curl_exec($ch);
    curl_close($ch);

    //字符串转为数组
    $header = explode("\n",$header);
    $ret[0] = array_shift($header);
    foreach( $header as $value){
      $index = strpos($value, ':');
      if (false !== $index) {
        $k = trim(substr($value, 0, $index));
        $v = trim(substr($value, $index + 1));
      }
      $ret[$k] = $v;
    }

    return $ret;
  }

  /**
   * 获取最后一次上传错误信息
   * @return string 错误信息
   */
  public function getError(){
    return $this->error;
  }
}