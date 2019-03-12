<?php /* Smarty version Smarty-3.1.6, created on 2017-12-29 18:36:42
         compiled from "D:/file/file/Home/View\User\changemessage.html" */ ?>
<?php /*%%SmartyHeaderCode:881659b2665b01bae5-97951109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea8cc5b4ee44eb536b0181f1a1fed7864119a630' => 
    array (
      0 => 'D:/file/file/Home/View\\User\\changemessage.html',
      1 => 1514543787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '881659b2665b01bae5-97951109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59b2665b13c4f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2665b13c4f')) {function content_59b2665b13c4f($_smarty_tpl) {?><html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>注册</title>
        <link href="<?php echo @CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head>
<body id="userlogin_body">
<div class="block block1" style="position: absolute;left: 450px;top: 100px;">  

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
                                            <?php echo $_SESSION['user_name'];?>

                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:13%; text-align: right;"><label for="User_username" style="color: white;">新用户名</label>
                                        </td>

                                        <td style="width:87%;">
                                            <input class="inputBg" size="25" name="userchange_name" id="User_username" type="text" value="" />  
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <label for="User_password" style="color: white;">密码</label>
                                        </td>

                                        <td>
                                            <input class="inputBg" size="25" name="userchange_password" id="User_password" type="password" value="" />         
                                        </td>
                                    </tr>
                                    <tr>
                                         <td align="right"><label for="user_question" style="color: white;">安全问题</label></td>
                                        <td>
                                            <select name="userchange_question">
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
                                            <input class="inputBg" size="25" name="userchange_answer" id="User_user_answer" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>

                                        <td align="right"><label for="User_user_qq" style="color: white;">qq号码</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="userchange_qq" id="User_user_qq" type="text" value="" />
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
    </html>
<?php }} ?>