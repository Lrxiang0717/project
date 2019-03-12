<?php /* Smarty version Smarty-3.1.6, created on 2017-12-29 18:01:43
         compiled from "D:/file/file/Home/View\User\changepassword.html" */ ?>
<?php /*%%SmartyHeaderCode:2981959b14faa2a5d61-97503808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f35a8a5bd89d438a5a874399c851dbec3d10ca04' => 
    array (
      0 => 'D:/file/file/Home/View\\User\\changepassword.html',
      1 => 1514541702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2981959b14faa2a5d61-97503808',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59b14faa3bfdb',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b14faa3bfdb')) {function content_59b14faa3bfdb($_smarty_tpl) {?><html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>注册</title>
        <link href="<?php echo @CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head>
<body id="userlogin_body">
<div class="block block1" style="position: absolute;left: 450px;top: 100px;">  

            <div class="block box">
                <div class="blank"></div>
                <div id="ur_here" style="color: white;">
                    当前位置: <a href="./login" style="color: red;text-underline-position: none">登陆</a> <code>&gt;</code> 找回密码
                </div>
            </div>
            <div class="blank"></div>


            <!--放入view具体内容-->

            <div class="block box">

                <div class="usBox">
                    <div class="usBox_2 clearfix">
                        <div class="logtitle3"></div>
                        <form id="yw0" action="<?php echo @__SELF__;?>
" method="post">                <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                                <tbody>
                                    <tr>
                                        <td style="width:13%; text-align: right;"><label for="User_username" style="color: white;">用户名</label>
                                        </td>

                                        <td style="width:87%;">
                                            <input class="inputBg" size="25" name="user_name" id="User_username" type="text" value="" />  
                                            
                                        </td>
                                    </tr>
                                     <tr>

                                        <td align="right"><label for="user_question" style="color: white;">安全问题</label></td>
                                        <td>
                                        <select name="user_question">
                                                <option value="你第一次坐飞机是去哪里" selected="selected">你第一次坐飞机是去哪里</option>
                                                <option value="你的第一所小学叫什么">你的第一所小学叫什么</option>
                                                <option value="你的母亲叫什么">你的母亲叫什么</option>
                                                <option value="你的父亲叫什么">你的父亲叫什么</option>
                                                <option value="你的祖籍在哪里">你的祖籍在哪里</option>
                                            </select>
                                        </td>
                                    </tr>
                                     <tr>

                                        <td align="right"><label for="user_answer" style="color: white;">安全问题答案</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_answer" id="User_user_answer" type="text" value="" />
                                        </td>
                                    </tr>
                                     <tr>
                                        <td align="right"><label for="user_newpassword" style="color: white;">新密码</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_newpassword" id="User_user_answer" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input name="Submit" value="修改" class="us_Submit_reg" type="submit" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>       
                    </div>
                </div>
            </div>
        </body>
    </html><?php }} ?>