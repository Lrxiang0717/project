<?php

namespace Home\Controller;
use Think\Controller;
class	UserController extends Controller {
        function register(){
            $user = new \Model\UserModel();
            //var_dump($user);
            //判断表单是否提交
            if(!empty($_POST)){
                $z = $user -> create();   //集成表单验证
                if(!$z){
                   $this ->display();
                   $arr = ($user->getError());
                   $keys = array_keys($arr);
                    //print_r($arr);
                    for($i = 0;$i <= 6;$i++){
                        if($keys[$i] == "user_name"){
                            echo '<div style="position:absolute;top:30px;left:300px;font-size:10px;color:rgb(320,50,80)">*用户名必须填写</div>';
                            }
                        if($keys[$i] == "user_password"){
                            echo '<div style="position:absolute;top:65px;left:300px;font-size:10px;color:rgb(320,50,80)">*密码必须填写</div>';
                            }
                        if($keys[$i] == "user_password2"){
                            echo '<div style="position:absolute;top:99px;left:300px;font-size:10px;color:rgb(320,50,80)">*确认密码必须与密码一致</div>';
                            }
                        if($keys[$i] == "user_question"){
                            echo '<div style="position:absolute;top:130px;left:300px;font-size:10px;color:rgb(320,50,80)">*安全问题必须填写，用于找回密码</div>';
                            }
                        if($keys[$i] == "user_answer"){
                            echo '<div style="position:absolute;top:176px;left:300px;font-size:10px;color:rgb(320,50,80)">*安全问题答案必须填写，用于找回密码</div>';
                            }
                        if($keys[$i] == "user_qq"){
                            echo '<div style="position:absolute;top:220px;left:300px;font-size:10px;color:rgb(320,50,80)">*qq号格式不正确</div>';
                            }
                        }       
                }else{
                    $rst = $user -> add();
                    if($rst){
                        $admin = new \Model\AdminModel();
                        $ar = array(
                            'admin_name' => $_POST['user_name'],
                            'admin_password' => $_POST['user_password'],
                        );
                        $admin -> add($ar);
                        $this -> success('注册成功',U('index.php/Home/User/login'));
                    }
                }
            }else{
            $this ->display();
            }
        }
        function _empty(){
            echo "页面加载错误！";
            
        }
        
         function login(){
        if(!empty($_POST)){
            //print_r($_POST);
            
            $user = new \Model\UserModel();
            $user_name = $_POST['user_name'];
            $user_password = $_POST['user_password'];
            $rst = $user -> checkNamePwd($user_name,$user_password);
            //登陆信息持久化$_SESSION
            session('user_name',$rst['user_name']);
            session('user_id',$rst['user_id']);
            if($rst === false){
                echo "<SCript>alert('用户名或密码错误！')</SCript>";
                exit($this ->display());
            }else{
                //校验验证码
                $verify = new \Think\Verify();
                if($verify -> check($_POST['captcha'])){
                $this -> redirect('index.php/Home/Index/index');
                }
                else{
                    echo "<SCript>alert('验证码错误！')</SCript>";
                }
            }
        }
		$this -> display();
    }
    function logout(){
        session(null);
        $this -> redirect("index.php/Home/User/login");
    }
        function verifyImg(){
        //设置验证码参数
        $config=array(
        'imageH'    =>  23,               // 验证码图片高度
        'imageW'    =>  100,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontSize'  =>  11,              // 验证码字体大小(px)
        'useNoise'  =>  false,            // 是否添加杂点
        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );
        //引入verify
        $verify = new  \Think\Verify($config);
        //打印验证码
        $img = $verify -> entry();
        }
    function changepassword(){
        $user = new \Model\UserModel();
        if(!empty($_POST)){
            //print_r($_POST);
            
            $user = new \Model\UserModel();
            $info['user_name'] = $_POST['user_name'];
            $rst = $user ->checkQuestion($_POST['user_name'],$_POST['user_question'],$_POST['user_answer']);
            if($rst === false){
                echo "<SCript>alert('用户名不存在或安全问题答案错误！')</SCript>";
                exit($this ->display());
            }else{
                if(!empty($_POST['user_newpassword'])){
                    $ar = array('user_password'=>$_POST['user_newpassword']);
                    $user ->where($info)->save($ar);
                }else{
                    echo "<SCript>alert('新密码不能为空！')</SCript>";
                }
            }
                $this -> success('修改成功',U('index.php/Home/User/login'));
        }
        $this ->display();
    }  
    function changemessage(){
        $user = new \Model\UserModel();
        if(!empty($_POST)){
            $user_name = $_POST['userchange_name'];
            $info['user_name'] = session('user_name');
            if(!empty($_POST['userchange_name'])){
                $ar = array(
                    'user_name'=>session('user_name'),
                    'user_name'=>$_POST['userchange_name']);
                $rst = $user ->where($info)->save($ar);
                session('user_name',$user_name);
                $info['user_name'] = $user_name;
            }
            $info['user_name'] = session('user_name');
            if(!empty($_POST['userchange_password'])){
                $ar = array(
                    'user_name'=>session('user_name'),
                    'user_password'=>$_POST['userchange_password']);
                $user ->where($info)->save($ar);
            }
            if(!empty($_POST['userchange_question'])){
                $ar = array(
                    'user_name'=>session('user_name'),
                    'user_question'=>$_POST['userchange_question']);
                $user ->where($info)->save($ar);
            }
            if(!empty($_POST['userchange_answer'])){
                $ar = array(
                    'user_name'=>session('user_name'),
                    'user_answer'=>$_POST['userchange_answer']);
                $user ->where($info)->save($ar);
            }
            if(!empty($_POST['userchange_qq'])){
                $ar = array(
                    'user_name'=>session('user_name'),
                    'user_qq'=>$_POST['userchange_qq']);
                $user ->where($info)->save($ar);
            }
            if($rst){
                
            }
            $this -> success('修改成功',U('index.php/Home/Index/right'));
        }
        else{
            //$this -> redirect('index.php/Home/Index/index');
        }
        $this ->display();
    }
}