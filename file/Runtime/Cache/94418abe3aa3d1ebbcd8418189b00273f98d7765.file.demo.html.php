<?php /* Smarty version Smarty-3.1.6, created on 2017-12-09 11:57:16
         compiled from "D:/file/file/Home/View\File\demo.html" */ ?>
<?php /*%%SmartyHeaderCode:174465a292d61bbc7d1-70391243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94418abe3aa3d1ebbcd8418189b00273f98d7765' => 
    array (
      0 => 'D:/file/file/Home/View\\File\\demo.html',
      1 => 1512791832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174465a292d61bbc7d1-70391243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a292d61c2bcf',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a292d61c2bcf')) {function content_5a292d61c2bcf($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="text/html">
    </head>
    <body>
        <div>TODO write content</div>
        <table>
    <tbody>
    <literal>
        <volist name="info" id="data" empty="暂时没有数据">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['file_id'];?>
:<?php echo $_smarty_tpl->tpl_vars['data']->value['file_name'];?>
<br/>
        </volist>
    </literal>
    </tbody>
    </table>
    </body>
</html>
<?php }} ?>