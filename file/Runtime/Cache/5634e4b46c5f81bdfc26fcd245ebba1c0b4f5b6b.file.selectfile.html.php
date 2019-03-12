<?php /* Smarty version Smarty-3.1.6, created on 2017-12-12 12:02:02
         compiled from "D:/file/file/Home/View\File\selectfile.html" */ ?>
<?php /*%%SmartyHeaderCode:1686459b566d3546b28-28320112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5634e4b46c5f81bdfc26fcd245ebba1c0b4f5b6b' => 
    array (
      0 => 'D:/file/file/Home/View\\File\\selectfile.html',
      1 => 1513051320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1686459b566d3546b28-28320112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59b566d36854a',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b566d36854a')) {function content_59b566d36854a($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>查询共享文件</title>

        <link href="./css/mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：文件管理 ->查询共享文件</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="../index/right">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__SELF__;?>
" method="post">
                     <input class="inputBg" size="25" name="file_select"type="text" value="" />
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>文件名称</td>
                        <td>文件类型</td>
                        <td>文件大小</td>
                        <td>文件描述</td>
                        <td>上传时间</td>
                        <td>上传用户</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['file_user'];?>
</td>
                        <td><a href="/file/index.php/Home/File/download">下载文件</a></td>
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