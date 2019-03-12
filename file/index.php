<?php
header("Content-Type: text/html;charset=utf-8");
//把目前tp模式转换成开发模式
define("APP_DEBUG",true);
//定义css、imag、js常量
define("SITE_URL","http://www.file.com/");
define("CSS_URL",SITE_URL."file/public/css/");
define("IMG_URL",SITE_URL."file/public/img/");
define("JS_URL",SITE_URL."file/public/js/");
include "../ThinkPHP/ThinkPHP.php";
//定义时间常量
date_default_timezone_set('PRC');
define("NOW_TIME",date("Y-m-d__H:i:s",time()));
//定义ip地址常量
define('USER_IP',$SERVER["REMOTE_ADDR"]);
?>