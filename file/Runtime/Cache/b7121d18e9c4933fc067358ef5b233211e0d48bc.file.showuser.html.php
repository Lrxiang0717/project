<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:30:02
         compiled from "D:/php/file/file/Home/View\Admin\showuser.html" */ ?>
<?php /*%%SmartyHeaderCode:117345b4211da3b16f6-98572576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7121d18e9c4933fc067358ef5b233211e0d48bc' => 
    array (
      0 => 'D:/php/file/file/Home/View\\Admin\\showuser.html',
      1 => 1513330717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117345b4211da3b16f6-98572576',
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
  'unifunc' => 'content_5b4211dae1d75',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4211dae1d75')) {function content_5b4211dae1d75($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
     <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>查看用户</title>

        <link type="text/css" rel="stylesheet" />
    </head>
    <body> 
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：管理员 ->查看用户</span>
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
                        <td hidden>用户id</td>
                        <td>用户名称</td>
                        <td>用户密码</td>
                        <td>用户安全问题</td>
                        <td>用户安全问题答案</td>
                        <td>用户qq</td>
                        <td>用户权限</td>
                        <td>操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td hidden><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_password'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_question'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_answer'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_qq'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_level'];?>
</td>
                        <td align="center">
                            <input type="button" value="操作用户" onclick= "Update(<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
')"> 
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
            window.location.assign("/file/index.php/Home/Admin/changeuser?user_id="+id+"&user_name="+name);
        }
    </script> 
</html>
<?php }} ?>