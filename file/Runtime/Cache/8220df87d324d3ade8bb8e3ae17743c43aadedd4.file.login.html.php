<?php /* Smarty version Smarty-3.1.6, created on 2017-09-05 18:42:57
         compiled from "D:/file/file/Home/View\Index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2513159ab6099124428-47869695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8220df87d324d3ade8bb8e3ae17743c43aadedd4' => 
    array (
      0 => 'D:/file/file/Home/View\\Index\\login.html',
      1 => 1504608012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2513159ab6099124428-47869695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59ab609921c9e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ab609921c9e')) {function content_59ab609921c9e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>
        <link href="<?php echo @CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="<?php echo @__SELF__;?>
" method="post">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>        
                                        <li class="user_main_text">用户名： </li>
                                        <li class="user_main_input">
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="uer_name"> </li></ul>
                                    <ul>
                                        <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtPasswordCssClass" id="admin_psd" name="user_password" type="password">
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">验证码：</li>
                                        <li class="user_main_input">
                                            <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
                                            <img src="http://www.file.com/file/index.php/Home/index/verifyImg"alt=""/>
                                        </li>
                                    </ul>
                                    <a href="../user/register" style="position: absolute;top: 320px;left:730px;font-size: 28px;color:blue">注册</a>
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo @IMG_URL;?>
user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                    </form>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
        <p style="position: absolute;top: 400px;left: 300px;font-size: 60px;color: white;font-family: simsun">欢迎使用文件共享系统</p>
        <p id="title" style="position: absolute;top: 402px;left: 302px;font-size: 60px;color: blue;font-family: simsun">欢迎使用文件共享系统</p>
    </body>
</html><?php }} ?>