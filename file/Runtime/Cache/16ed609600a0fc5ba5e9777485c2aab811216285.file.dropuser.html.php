<?php /* Smarty version Smarty-3.1.6, created on 2017-09-17 23:50:42
         compiled from "D:/file/file/Home/View\Admin\dropuser.html" */ ?>
<?php /*%%SmartyHeaderCode:355159be99d21702b2-90290274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ed609600a0fc5ba5e9777485c2aab811216285' => 
    array (
      0 => 'D:/file/file/Home/View\\Admin\\dropuser.html',
      1 => 1505661344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '355159be99d21702b2-90290274',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59be99d2229d4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59be99d2229d4')) {function content_59be99d2229d4($_smarty_tpl) {?><html>
    <script>
        function manage(){
            document.form1.action='/file/index.php/Home/Admin/manage';
            document.form1.method="post";
            document.form1.submit();
        }
        function dropuser(){
            document.form1.action='/file/index.php/Home/Admin/dropuser';
            document.form1.method="post";
            document.form1.submit();
        }
        function adminuser(){
            document.form1.action='/file/index.php/Home/Admin/adminuser';
            document.form1.method="post";
            document.form1.submit();
        }
    </script>
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
            <form name="form1" action="">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>用户id</td>
                    <td><input type="text" name="user_id" /></td>
                </tr>
                <tr>
                    <td>用户名称</td>
                    <td><input type="text" name="user_name" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="查看用户文件" onclick='manage()'/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="提升为管理员" onclick="adminuser()"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="删除用户" onclick="dropuser()"/>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>