<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:30:06
         compiled from "D:/php/file/file/Home/View\File\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:257755b4211de8db763-03336076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb66d7d5ad0030466ebe1f352812031294d3f036' => 
    array (
      0 => 'D:/php/file/file/Home/View\\File\\manage.html',
      1 => 1515321321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257755b4211de8db763-03336076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4211ded85ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4211ded85ed')) {function content_5b4211ded85ed($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                        <td>操作</td>
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
                        <td align="center">
                            <input type="button" value="修改" onclick= "Update(<?php echo $_smarty_tpl->tpl_vars['v']->value['file_id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['v']->value['file_name'];?>
')"> 
                            <input type="button" value="删除" onclick= "Delete(<?php echo $_smarty_tpl->tpl_vars['v']->value['file_id'];?>
)"> 
                        </td>
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
    <script type="text/javascript">
        function Update(id,name){
            window.location.assign("/file/index.php/Home/File/changefile?file_id="+id+"&file_name="+name);
        }
        function Delete(id){
            if(confirm('确认删除？')){
                window.location.assign("/file/index.php/Home/File/dropfile?file_id="+id);
            }
            else{
                return false;
            }
        }
    </script>
</html><?php }} ?>