<?php
/**
 * Created by PhpStorm.
 * User: zavier
 * Date: 2017/5/9
 * Time: 下午1:19
 */

namespace app\index\controller;

use think\Controller;

class common extends Controller
{
    public function getOpenId(){
        if($_GET['code']){
            dump();
        }
    }
}