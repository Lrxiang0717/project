<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:30:00
         compiled from "D:/php/file/file/Home/View\Admin\changeuser.html" */ ?>
<?php /*%%SmartyHeaderCode:117615b4211d8d9cbc6-61100530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adbb7d51c1c354fffff29b64bcf47f0a0bb19ee5' => 
    array (
      0 => 'D:/php/file/file/Home/View\\Admin\\changeuser.html',
      1 => 1514595672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117615b4211d8d9cbc6-61100530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4211d8eab53',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4211d8eab53')) {function content_5b4211d8eab53($_smarty_tpl) {?><html>
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