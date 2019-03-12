<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Model;
use Think\Model;

class UserModel extends Model{
    //实现表单项目验证
    protected $patchValidate    =   true;//批量处理错误信息
    //重写父类属性_validate实现表单验证
    
    protected $_validate     =   array(
        array('user_name','require','用户名必须填写'),
        array('user_password','require','密码必须填写'),
        array('user_password2','require','确认密码必须填写'),
        array('user_password2','user_password','确认密码与密码必须一致','0','confirm'),
        array('user_question','require','安全问题必须填写，用于找回密码'),
        array('user_answer','require','安全问题答案必须填写，用于找回密码'),
        array('user_qq',"/^[1-9]\d{4,13}$/",'qq格式不正确'),
    );
    function checkNamePwd($name,$password){
    //根据$name查询是否有此记录
    //select *from file_user where user_name = $name,
    //select() find()
    //根据指定字段进行查询getByuser_name($name)
     $info = $this -> getByuser_name($name);
    //$info = null 说明用户名错误
    //$info = 一堆数组 用户名真该额
    //var_dump($info);
    if($info != null){
        //验证密码
        if($info['user_password'] != $password){
            return false;
        }else{
            return $info;
        }
    }else{
        return false;
        }
    }
    function checkQuestion($name,$question,$answer){
        $info = $this -> getByuser_name($name);
        if($info != null)
    if(($info['user_question']!=$question) || ($info['user_answer']!=$answer)){
                return false;
            }
            else{
                return $info;
            }
    }
    function checkIdName($id,$name){
        $info = $this -> getByuser_id($id);
        if($info != null){
            if($info['user_name'] != $name){
                return false;
            }
            else{
                return $info;
            }
        }
        else{
            return false;
        }
    }
}


