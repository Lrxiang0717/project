<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:28:09
         compiled from "D:/php/file/file/Home/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:274025b4211690cc0d0-94007896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14dc978c6b45ed706a62d52c083fef4fe48a354c' => 
    array (
      0 => 'D:/php/file/file/Home/View\\Index\\head.html',
      1 => 1504774023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274025b4211690cc0d0-94007896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b42116a96728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b42116a96728')) {function content_5b42116a96728($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />
        <link href="<?php echo @CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body id="userlogin_body">
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @IMG_URL;?>
/header_bg.jpg" border=0>
            <tr height=56>
                <p id="title" style="position: absolute;top: 20px;left: 10px;font-size: 30px;color: blue;font-family: simsun">欢迎使用文件共享系统</p>
                <p style="position: absolute;top: 22px;left: 12px;font-size: 30px;color: white;font-family: simsun">欢迎使用文件共享系统</p>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户:<?php echo $_SESSION['user_name'];?>
&nbsp;&nbsp;  &nbsp;&nbsp;  <a style="color: #fff" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="../User/logout" target=_top>退出系统</a> 
                </td>
                <td align=right width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>