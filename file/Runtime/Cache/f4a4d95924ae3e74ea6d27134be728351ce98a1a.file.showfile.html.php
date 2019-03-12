<?php /* Smarty version Smarty-3.1.6, created on 2017-12-30 09:11:38
         compiled from "D:/file/file/Home/View\Admin\showfile.html" */ ?>
<?php /*%%SmartyHeaderCode:214655a46e6e61410a5-73980058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4a4d95924ae3e74ea6d27134be728351ce98a1a' => 
    array (
      0 => 'D:/file/file/Home/View\\Admin\\showfile.html',
      1 => 1514596292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214655a46e6e61410a5-73980058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a46e6e62a023',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46e6e62a023')) {function content_5a46e6e62a023($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>查看个人文件</title>

        <link type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：文件管理 -> 查看个人文件</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="../index/right">【返回】</a>
                </span>
            </span>
        </div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__SELF__;?>
" method="post">
                     <input class="inputBg" size="25" name="file_select" type="text" value="" />
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td hidden>文件id</td>
                        <td>文件名称</td>
                        <td>文件类型</td>
                        <td>文件大小</td>
                        <td>文件描述</td>
                        <td>上传时间</td>
                        <td>文件路径</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="file">
                        <td hidden><?php echo $_smarty_tpl->tpl_vars['v']->value['file_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['file_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['file_type'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['file_size'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['file_describe'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['file_date'];?>
</td>
                        <td>D:\file\file\public\Upload</td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>