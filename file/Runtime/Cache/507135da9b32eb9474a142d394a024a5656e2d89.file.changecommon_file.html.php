<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:30:04
         compiled from "D:/php/file/file/Home/View\Admin\changecommon_file.html" */ ?>
<?php /*%%SmartyHeaderCode:11665b4211dcbc5520-45332608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '507135da9b32eb9474a142d394a024a5656e2d89' => 
    array (
      0 => 'D:/php/file/file/Home/View\\Admin\\changecommon_file.html',
      1 => 1513056701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11665b4211dcbc5520-45332608',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4211dcd1138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4211dcd1138')) {function content_5b4211dcd1138($_smarty_tpl) {?><html>
    <head>
        <script>
        function changecommon_file(){
            document.form1.action='/file/index.php/Home/Admin/changecommon_file';
            document.form1.method="post";
            document.form1.submit();
        }
    </script>
        <title>修改个人文件</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="./css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员->修改公共文件</span>
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
                    <td>文件名称</td>
                    <td><?php echo $_SESSION['file_commonname'];?>
</td>
                </tr>
                <tr>
                    <td>修改文件名称</td>
                    <td><input type="text" name="file_newname" /></td>
                </tr>
                <tr>
                    <td>修改文件描述</td>
                    <td>
                        <textarea name="file_newdescribe"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="修改共享文件" onclick='changecommon_file()'>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>