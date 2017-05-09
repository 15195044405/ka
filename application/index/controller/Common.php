<?php
/**
 * Created by PhpStorm.
 * User: zavier
 * Date: 2017/5/9
 * Time: 下午1:19
 */

namespace app\index\controller;

use think\Controller;

class Common extends Controller
{
    //小程序唯一标识
    private $appId = 'wxb739424ff4e15037';
    //小程序的 app secret
    private $secret = '9616dc30291faab1768d50191aa3d858';


    public function getOpenId(){
        if($_GET['code']){
            $url = "https://api.weixin.qq.com/sns/jscode2session?appid=".$this->appId."&secret=".$this->secret."&js_code=".$_GET['code']."&grant_type=authorization_code";
            //Object
            echo file_get_contents($url);
        }
    }
}