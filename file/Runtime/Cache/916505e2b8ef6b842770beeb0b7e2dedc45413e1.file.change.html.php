<?php /* Smarty version Smarty-3.1.6, created on 2017-12-29 18:14:57
         compiled from "D:/file/file/Home/View\User\change.html" */ ?>
<?php /*%%SmartyHeaderCode:259365a4615a1170b35-30273140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916505e2b8ef6b842770beeb0b7e2dedc45413e1' => 
    array (
      0 => 'D:/file/file/Home/View\\User\\change.html',
      1 => 1514542296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259365a4615a1170b35-30273140',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4615a126b54',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4615a126b54')) {function content_5a4615a126b54($_smarty_tpl) {?><html lang="en">
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
                                            <input class="inputBg" size="25" name="userchange_question" id="User_user_qusetion" type="text" value="" />
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