<?php /* Smarty version Smarty-3.1.6, created on 2017-12-04 18:47:14
         compiled from "D:/file/file/Home/View\File\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3070759b37024a97fc9-76674347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '554b19203526df27811dafc495d7a48447d8978f' => 
    array (
      0 => 'D:/file/file/Home/View\\File\\add.html',
      1 => 1512384432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3070759b37024a97fc9-76674347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59b37024c22f1',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b37024c22f1')) {function content_59b37024c22f1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>上传文件</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="./css/mine.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：文件管理->上传文件</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="../index/right">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>文件名称</td>
                    <td><input type="text" name="file_name" /></td>
                </tr>
                <tr>
                    <td>文件选择</td>
                    <td><input type="file" name="file_file" /></td>
                </tr>
                <tr>
                    <td>文件描述</td>
                    <td><input type="text" name="file_describe" /></td>
                </tr>
                <tr>
                    <td><label for="file_common">是否共享(可被其他用户下载)</label></td>
                                        <td>
                                            <select name="file_common">
                                                <option select = "select" value="0">--请选择--</option>
                                                <option value="1">否</option>
                                                <option value="2">是</option>
                                            </select>                      
                                        </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="上传">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>