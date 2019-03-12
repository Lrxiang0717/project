<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set('PRC');
class AdminController extends Controller{
    function changecommon_file(){
            $file = new \Model\CommonFileModel();
            if(!empty($_GET)){
                session('file_commonid',$_GET['file_id']);
                session('file_commonname',$_GET['file_name']);
            }
            if(session('file_commonid'==null)){
                echo"<SCript>alert('请选择文件')</SCript>";
                $this ->success('正在跳转',U('index.php/Home/Admin/selectcommon_file'));
            }
            if(!empty($_POST)){
                if(empty($_POST['file_newname'])){
                    $ar = array(
                        'file_id' => session('file_commonid'),
                        'file_describe' => $_POST['file_newdescribe']);
                    $file -> save($ar);
                    session('file_commonid',null);
                    session('file_commonname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }else if(empty ($_POST['file_newdescribe'])){
                    $ar = array(
                        'file_id' => session('file_commonid'),
                        'file_name' => $_POST['file_newname']);
                    $file -> save($ar);
                    session('file_commonid',null);
                    session('file_commonname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }else if(empty($_POST['file_newname'])&&empty($_POST['file_newdescribe'])){
                    session('file_commonid',null);
                    session('file_commonname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }else{
                    $ar = array(
                        'file_id' => session('file_commonid'),
                        'file_name' => $_POST['file_newname'],
                        'file_describe' => $_POST['file_newdescribe']);
                    $file -> save($ar);
                    session('file_commonid',null);
                    session('file_commonname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }
            }
        $this ->display();
    }
    function dropcommon_file(){
        $file = new \Model\CommonFileModel();
            $info['file_id']=$_GET['file_id'];
            $file -> where($info)->delete();
            $this -> success('删除成功',U('index.php/Home/Index/right'));
            $this ->display();
    }
    function selectcommon_file(){
            if(!empty($_POST)){
                $select = D('CommonFile');
                $total = $select -> count();//总记录条数
                $page = new \Home\Common\Page($total,10);
                $pagelist = $page ->fpage();
                $this -> assign('pagelist',$pagelist);
                $file = $_POST['file_commonselect'];
                $sql['file_name'] = array('like',"%$file%");
                $info = $select -> where($sql) ->limit($page->limit)-> select();
                //var_dump($info);
                $this -> assign('info',$info);
                $this ->display();
            }
            else{
                $select = D("CommonFile");
                $total = $select -> count();//总记录条数
                $page = new \Home\Common\Page($total,10);
                $pagelist = $page ->fpage();
                $this -> assign('pagelist',$pagelist);
                $info = $select -> limit($page->limit)-> select();
                $this -> assign('info',$info);
                $this ->display();
            }
        }
    function showuser(){
         if(!empty($_POST)){
                $user = D('User');
                $total = $user -> count();//总记录条数
                $page = new \Home\Common\Page($total,10);
                $pagelist = $page ->fpage();
                $this -> assign('pagelist',$pagelist);
                $user_name = $_POST['user_select'];
                $sql['user_name'] = array('like',"%$user_name%");
                $info = $user -> where($sql) ->limit($page->limit)-> select();
                //var_dump($info);
                $this -> assign('info',$info);
                $this ->display();
            }else{
                $user = D("User");
                $total = $user -> count();//总记录条数
                $page = new \Home\Common\Page($total,10);
                $pagelist = $page ->fpage();
                $this -> assign('pagelist',$pagelist);
                $info = $user -> limit($page->limit)-> select();
                $this -> assign('info',$info);
                $this ->display();
            }
    }
    function changeuser(){
        if(!empty($_GET)){
            session('user_commonid',$_GET['user_id']);
            session('user_commonname',$_GET['user_name']);
        }
        $this ->display();
    }
    function dropuser(){
        echo 123;
        $user = D('User');
        $level = D('Admin');
        $info['user_name']=session('user_commonname');
        $info2['user_id']=session('user_commonid');
        $info3['admin_id'] = session('user_commonid');
        $info4['admin_name'] = session('user_commonname');
        $user -> where($info)->where($info2)->delete();
        $level -> where($info3)->where($info4)->delete();
        $this -> success('删除成功',U('index.php/Home/Index/right'));
        $this ->display();
    }
    function adminuser(){
        $user = D('User');
        $level = D('Admin');
        $info1['admin_id'] = session('user_commonid');
        $info2['admin_name'] = session('user_commonname');
        $info3['user_id'] = session('user_commonid');
        $info4['user_name'] = session('user_commonname');
        $level -> admin_role_id = 0;
        $level -> where($info1) -> where($info2) ->save();
        $user -> user_level = '管理员';
        $user -> where($info3) -> where($info4) ->save();
        $this -> success('修改成功',U('index.php/Home/Index/right'));
    }
    function showfile(){
        $file = D('File');
        $info1['file_user'] = session('user_commonname');
        $total = $file -> count();//总记录条数
        $page = new \Home\Common\Page($total,10);
        $pagelist = $page ->fpage();
        $this -> assign('pagelist',$pagelist);
        $info = $file -> limit($page->limit)-> select();
        $this -> assign('info',$info);
        $this ->display();
    }
}

