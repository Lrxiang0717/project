<?php /* Smarty version Smarty-3.1.6, created on 2017-12-30 09:01:50
         compiled from "D:/file/file/Home/View\Admin\changeuser.html" */ ?>
<?php /*%%SmartyHeaderCode:443859bbe80aaea380-44370283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c2788aa18c4bfd4246e81a7f4597a942abb67f' => 
    array (
      0 => 'D:/file/file/Home/View\\Admin\\changeuser.html',
      1 => 1514595672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '443859bbe80aaea380-44370283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59bbe80ab9459',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbe80ab9459')) {function content_59bbe80ab9459($_smarty_tpl) {?><html>
    <head>
        <title>操作用户</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link  type="text/css" rel="stylesheet">
    </head>
    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员->操作用户</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="../index/right">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form name="form1" action="" method="post">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>用户id</td>
                    <td><?php echo $_SESSION['user_commonid'];?>
</td>
                </tr>
                <tr>
                    <td>用户名称</td>
                    <td><?php echo $_SESSION['user_commonname'];?>
</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="/file/index.php/Home/Admin/showfile"/>查看用户文件</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="/file/index.php/Home/Admin/adminuser"/>提升用户为管理员</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="/file/index.php/Home/Admin/dropuser" onclick="if (confirm('确认删除？')) return true; else return false;"/>删除用户</a>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>