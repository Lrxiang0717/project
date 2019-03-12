<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 21:29:27
         compiled from "D:/php/file/file/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:139075b4211b717dd41-07064554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '728aece9f79ba45893b84ebb1618dca97345d79b' => 
    array (
      0 => 'D:/php/file/file/Home/View\\User\\register.html',
      1 => 1505020545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139075b4211b717dd41-07064554',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b4211b73b246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4211b73b246')) {function content_5b4211b73b246($_smarty_tpl) {?><html lang="en">
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
                    当前位置: <a href="./login" style="color: red;text-underline-position: none">登陆</a> <code>&gt;</code> 用户注册 
                </div>
            </div>
            <div class="blank"></div>


            <!--放入view具体内容-->

            <div class="block box" ">

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
                                        <td align="right">
                                            <label for="User_password" style="color: white;">密码</label>
                                        </td>

                                        <td>
                                            <input class="inputBg" size="25" name="user_password" id="User_password" type="password" value="" />         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_password2" style="color: white;">密码确认</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_password2" id="User_password2" type="password" />
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

                                        <td align="right"><label for="User_user_qq" style="color: white;">qq号码</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_qq" id="User_user_qq" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input name="Submit" value="注册" class="us_Submit_reg" type="submit" />
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