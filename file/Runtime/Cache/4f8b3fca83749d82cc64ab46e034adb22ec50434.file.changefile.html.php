<?php /* Smarty version Smarty-3.1.6, created on 2017-12-15 13:41:08
         compiled from "D:/file/file/Home/View\File\changefile.html" */ ?>
<?php /*%%SmartyHeaderCode:1403359b5152c3b7ed4-76980110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f8b3fca83749d82cc64ab46e034adb22ec50434' => 
    array (
      0 => 'D:/file/file/Home/View\\File\\changefile.html',
      1 => 1513316466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403359b5152c3b7ed4-76980110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59b5152c476db',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b5152c476db')) {function content_59b5152c476db($_smarty_tpl) {?><html>
       <head>
        <title>修改个人文件</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="./css/mine.css" type="text/css" rel="stylesheet">
         <script>
        function changefile(){
            document.form1.action='/file/index.php/Home/File/changefile';
            document.form1.method="post";
            document.form1.submit();
        }
    </script>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：文件管理->修改个人文件</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="../index/right">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form name='form1' action="" method="post">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>文件名称</td>
                    <td><?php echo $_SESSION['file_oldname'];?>
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
                        <input type="button" value="修改" onclick='changefile()'>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>