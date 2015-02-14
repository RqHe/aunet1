<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/8
 * Time: 23:32
 */

namespace Think\Session\Driver;

/*
* 自定义Redis驱动
*/
class Redis {
    private $redis;

    private $expire;


    public function __construct(){
        session_set_save_handler(
            array(&$this,'open'),
            array(&$this,'close'),
            array(&$this,'read'),
            array(&$this,'write'),
            array(&$this,'destroy'),
            array(&$this,'gc')
        );
    }
    public function open($path,$name){
        $this->expire=C('SESSION_EXPIRE')?C('SESSION_EXPIRE'):ini_get('session.gc_maxlifetime');
        $this->redis=new Redis();
        return $this->redis->connect(C('REDIS_HOST'),C('REDIS_PORT'));
    }
    public function close(){
        return $this->redis->close();
    }
    public function read($id){
        $id=C('SESSION_PROFIX').$id;
        $data=$this->redis-get($id);
        return $data?$data:'';
    }
    public function write($id,$data){
        $id=C('SESSION_PROFIX').$id;
//        $data=addslashes($data);
        return $this->redis->set($id,$data,$this->expire);
    }
    public function destroy($id){
        $id=C('SESSION_PROFIX').$id;
        return $this->redis->delete($id);
    }
    /*
     * 垃圾处理
     */
    public function gc($maxLifeTime){
        return true;
    }
} 