<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:28:16
         compiled from "D:/php/file/file/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:203475b421170d25aa0-33099165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d692d80ef8936d2115c7cb71aac474e79021190' => 
    array (
      0 => 'D:/php/file/file/Home/View\\User\\login.html',
      1 => 1504846480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203475b421170d25aa0-33099165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b421170e915a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b421170e915a')) {function content_5b421170e915a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="user_name"> </li></ul>
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
                                            <img src="http://www.file.com/file/index.php/Home/user/verifyImg"alt=""/>
                                        </li>
                                    </ul>
                                    <a href="../user/register" style="position: absolute;top: 320px;left:730px;font-size: 23px;color:blue">注册</a>
                                     <a href="../user/changepassword" style="position: absolute;top: 350px;left:708px;font-size: 23px;color:blue">找回密码</a>
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