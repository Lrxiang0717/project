<?php /* Smarty version Smarty-3.1.6, created on 2017-09-17 00:33:06
         compiled from "D:/file/file/Home/View\File\dropfile.html" */ ?>
<?php /*%%SmartyHeaderCode:2685559bd5242ee16f4-05274055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0840df84599bc0df0506b794f108735330ab991' => 
    array (
      0 => 'D:/file/file/Home/View\\File\\dropfile.html',
      1 => 1505579542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2685559bd5242ee16f4-05274055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59bd524306e8a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bd524306e8a')) {function content_59bd524306e8a($_smarty_tpl) {?><html>
    <script>
        function changefile(){
            document.form1.action='/file/index.php/Home/File/changefile';
            document.form1.method="post";
            document.form1.submit();
        }
        function dropfile(){
            document.form1.action='/file/index.php/Home/File/dropfile';
            document.form1.method="post";
            document.form1.submit();
        }
    </script>
    <head>
        <title>修改个人文件</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="./css/mine.css" type="text/css" rel="stylesheet">
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
                    <td>文件id</td>
                    <td><input type="text" name="file_id" /></td>
                </tr>
                <tr>
                    <td>文件名称</td>
                    <td><input type="text" name="file_name" /></td>
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
                    <td><label for="file_common">修改共享(可被其他用户下载)</label></td>
                                        <td>
                                            <select name="file_newcommen">
                                                <option value="0" selected="selected">否</option>
                                                <option value="1">是</option>
                                            </select>                      
                                        </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="删除" onclick='dropfile()'>
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