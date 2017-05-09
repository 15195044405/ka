<?php
/**
 * Created by PhpStorm.
 * User: zavier
 * Date: 2017/5/5
 * Time: 上午10:39
 */

namespace app\index\controller;


use app\index\model\User;
use think\Request;
use think\Session;


class Login extends Common
{
    public function index(){

    }

    /**
     * 登录
     */
    public function login(){

    }

    /**
     * @param bool $data
     *
     * 注册
     */
    public function sign($data=false){
        if($data){
            $user = new User();
            $user->save(json_decode($data));
        }else{

        }
    }

    /**
     * @return string
     */
    public function send_sms(){
        if(Request::instance()->isPost()){
            //目前没有开通短信接口，直接返回一个随机数
            $sms = mt_rand(000000,999999);
            $data = file_get_contents("php://input");
            $this->sign($data);
            dump($data);
        }
    }
}