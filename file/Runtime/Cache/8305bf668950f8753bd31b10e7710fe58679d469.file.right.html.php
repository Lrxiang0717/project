<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:28:11
         compiled from "D:/php/file/file/Home/View\Index\right.html" */ ?>
<?php /*%%SmartyHeaderCode:72155b42116b16a3b5-51332399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8305bf668950f8753bd31b10e7710fe58679d469' => 
    array (
      0 => 'D:/php/file/file/Home/View\\Index\\right.html',
      1 => 1504931369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72155b42116b16a3b5-51332399',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b42116b46ff7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b42116b46ff7')) {function content_5b42116b46ff7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <script type="text/javascript">


//定义函数：构建要显示的时间日期字符串
function showTime()
{
 //创建Date对象
 var today = new Date();
 //分别取出年、月、日、时、分、秒
 var year = today.getFullYear();
 var month = today.getMonth()+1;
 var day = today.getDate();
 var hours = today.getHours();
 var minutes = today.getMinutes();
 var seconds = today.getSeconds();
 //如果是单个数，则前面补0
 month  = month<10  ? "0"+month : month;
 day  = day <10  ? "0"+day : day;
 hours  = hours<10  ? "0"+hours : hours;
 minutes = minutes<10 ? "0"+minutes : minutes;
 seconds = seconds<10 ? "0"+seconds : seconds;
 
 //构建要输出的字符串
 var str = year+"年"+month+"月"+day+"日 "+hours+":"+minutes+":"+seconds;
 
 //获取id=result的对象
 var obj = document.getElementById("result");
 //将str的内容写入到id=result的<div>中去
 obj.innerHTML = str;
 //延时器
 window.setTimeout("showTime()",1000);
}
</script>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=<?php echo @IMG_URL;?>
title_bg1.jpg>当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=<?php echo @IMG_URL;?>
shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="<?php echo @IMG_URL;?>
admin_p.gif" 
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td onload="showTime()">当前时间：</td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px"><?php echo $_SESSION['user_name'];?>
</td></tr>
                        <tr>
                            <td>欢迎进入文件共享系统！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=<?php echo @IMG_URL;?>
title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000"><?php echo $_SESSION['user_name'];?>
</td></tr>
            <tr>
                <td align=right>上线时间：</td>
                <td style="color: #880000"><?php echo @NOW_TIME;?>
</td></tr>
            <tr>
                <td align=right>ip地址：</td>
                <td style="color: #880000">127.0.0.1</td></tr>
            <tr>
                <td align=right>身份过期：</td>
                <td style="color: #880000">30 分钟</td></tr>
        </table>
    </body>
</html><?php }} ?>