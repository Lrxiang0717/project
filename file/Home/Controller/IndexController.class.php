<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function _empty(){
            echo "页面加载错误！";
        }
    function head(){
        //var_dump(get_defined_constants(true));
		$this -> display();
    }
    function right(){
		$this -> display();
    }
    function left(){
        $sql = "select * from file_admin where admin_id=".session('user_id');
        $info = D() ->query($sql);
        $role_id = $info[0]['admin_role_id'];
        
        //根据角色信息获得权限ids的信息
        $sql = "select * from file_role where role_id=" . $role_id;
        $rinfo = D()->query($sql);
        $auth_ids = $rinfo[0]['role_auth_ids'];
        
        $sql = "select * from file_auth where auth_level = 0";
        //如果是管理员则实现全部权限
        if($role_id !=0){
            $sql .= " and auth_id in ($auth_ids)";
        }
        $pinfo = D()->query($sql);
        
        $sql = "select * from file_auth where auth_level = 1";
        //如果是管理员则实现全部权限
        if($role_id !=0){
            $sql .= " and auth_id in ($auth_ids)";
        }
        $sinfo = D()->query($sql);
        $this -> assign('pauth_info',$pinfo);
        $this -> assign('sauth_info',$sinfo);
		$this -> display();
    }
    function index(){
        $this ->display();
    }
}