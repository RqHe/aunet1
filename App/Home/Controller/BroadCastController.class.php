<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/18
 * Time: 4:59
 */

namespace Home\Controller;


use Think\Controller;

class BroadCastController extends Controller{
    public function index(){

        $this->broadcast=D('forecast')->order('time desc')->select();
//        layout('news_layout');
        $this->display();
    }
}