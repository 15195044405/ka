<?php
/**
 * Created by PhpStorm.
 * User: zavier
 * Date: 2017/5/5
 * Time: 上午10:39
 */

namespace app\index\controller;


use think\Controller;

class Login extends Controller
{
    public function index(){

    }

    /**
     * 登录
     */
    public function login(){

    }

    /**
     * 注册
     */
    public function sign(){
        echo '<pre>';
        dump($_SERVER);
        exit;
    }
}