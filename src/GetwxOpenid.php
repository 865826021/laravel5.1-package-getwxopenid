<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/18
 * Time: 21:27
 */
namespace Yuxiaoyang\GetwxOpenid;

ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);
use Yuxiaoyang\GetwxOpenid\WxPayApi;
use Yuxiaoyang\GetwxOpenid\JsApiPay;

class GetwxOpenid
{	
	//获取用户openid
    public function getOpenid(){
        $tools = new JsApiPay();
        $openId = $tools->GetOpenid();
        return $openId;
    }

}