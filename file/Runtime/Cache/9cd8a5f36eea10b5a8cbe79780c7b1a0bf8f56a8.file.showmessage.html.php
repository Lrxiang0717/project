<?php /* Smarty version Smarty-3.1.6, created on 2017-09-07 18:25:12
         compiled from "D:/file/file/Home/View\User\showmessage.html" */ ?>
<?php /*%%SmartyHeaderCode:3249059b10b3e9ce7d7-38670618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd8a5f36eea10b5a8cbe79780c7b1a0bf8f56a8' => 
    array (
      0 => 'D:/file/file/Home/View\\User\\showmessage.html',
      1 => 1504779909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3249059b10b3e9ce7d7-38670618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59b10b3eb05b2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b10b3eb05b2')) {function content_59b10b3eb05b2($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
    </head>
    
<body>
    <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=<?php echo @IMG_URL;?>
title_bg1.jpg>当前位置: 个人信息->显示个人信息</td></tr>
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
                            <td>当前时间：2008-12-27 17:03:55</td></tr>
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
    <div>
        <table>用户名:</table>
        <table>用户名:</table>
        <table>用户名:</table>
        <table>用户名:</table>
    </div>
</body>
    </frameset>
</html>
<?php }} ?>