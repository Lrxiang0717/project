<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set('PRC');
class FileController extends Controller {
    public $con;
            function _empty(){
            echo "页面加载错误！";
        }
        function add(){
            if(!empty($_POST)){
                if(!empty($_FILES)){
                    $config = array(
                        'rootPath'  => './public/',
                        'savePath'  => 'Upload/',
                    );
                    if(!empty($_POST['file_name'])){
                        $config = array(
                        'rootPath'  => './public/',
                        'savePath'  => 'Upload/',
                        'saveName'  => $_POST['file_name'],
                    );
                    }else{
                        $config = array(
                        'rootPath'  => './public/',
                        'savePath'  => 'Upload/',
                        'saveName'  => $file['name'],
                    );
                    }
                    $upload = new \Think\Upload($config);//实例化上传类
                    $info = $upload ->uploadOne($_FILES['file_file']);
                    if (!empty($info)){
                        $ar = array(
                            'file_name' => $info['savename'],
                            'file_type' => $info['type'],
                            'file_size' => $info['size'],
                            'file_describe' => $_POST['file_describe'],
                            'file_date' => date("Y-m-d__H:i:s",time()),
                            'file_user' => session('user_name'),
                        );
                        if($_POST['file_common']=='0'){
                           echo "<SCript>alert('请择是否共享！')</SCript>";
                           exit($this ->display());
                        }
                        $file = new \Model\FileModel();
                        $rst = $file ->add($ar);
                        $oldid = $rst['file_id'];
                        if($_POST['file_common']=='2'){
                            $commonfile = new \Model\CommonFileModel();
                            $ar = array(
                            'file_name' => $info['savename'],
                            'file_type' => $info['type'],
                            'file_size' => $info['size'],
                            'file_describe' => $_POST['file_describe'],
                            'file_date' => date("Y-m-d__H:i:s",time()),
                            'file_user' => session('user_name'),
                            'file_oldid'=> $oldid,
                        );
                            $commonfile -> add($ar);
                            }
                        }
                        $this ->success('上传成功',U('index.php/Home/file/manage'));
                    }else{
                        echo "<SCript>alert('请选择文件！')</SCript>";
                        exit($this ->display());
                        }
            }
            else{
                exit($this ->display());
            }
            $this ->display();
        }
        function manage(){
            if(!empty($_POST)){
                $manage = D('File');
                $total = $manage -> count();
                $file = $_POST['file_select'];
                 $page = new \Home\Common\Page($total,10);
                $pagelist = $page ->fpage();
                $this -> assign('pagelist',$pagelist);
                $sql['file_name'] = array('like',"%$file%");
                $rst['file_user']=session('user_name');
                $info = $manage -> where($rst)->where($sql) ->limit($page->limit)->select();
                //var_dump($info);
                $this -> assign('info',$info);
                $this ->display();
            }
            else{
                $manage = D("File");
                $total = $manage -> count();//总记录条数
                $page = new \Home\Common\Page($total,10);
                $pagelist = $page ->fpage();
                $this -> assign('pagelist',$pagelist);
                $rst['file_user']=session('user_name');
                $info = $manage->where($rst)->limit($page->limit)-> select();
                $this -> assign('info',$info);
                $this ->display();
            }
        }
        function selectfile(){
            if(!empty($_POST)){
                $select = D('CommonFile');
                $total = $select -> count();//总记录条数
                $page = new \Home\Common\Page($total,10);
                $pagelist = $page ->fpage();
                $this -> assign('pagelist',$pagelist);
                $file = $_POST['file_select'];
                $sql['file_name'] = array('like',"%$file%");
                $info = $select -> where($sql) ->limit($page->limit)->select();
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
        function changefile(){
            $file = new \Model\FileModel();
            if(!empty($_GET)){
                    session('file_oldid',$_GET['file_id']);
                    session('file_oldname',$_GET['file_name']);
                    $arr = $file ->where($inf)->find();
            }
            if(session('file_oldid')==null){
                echo"<SCript>alert('请选择文件')</SCript>";
                $this->success('正在跳转',U('index.php/Home/File/manage'));
            }
            if(!empty($_POST)){
                if(empty($_POST['file_newname'])){
                    $ar = array(
                        'file_id' => session('file_oldid'),
                        'file_user' => session('user_name'),
                        'file_describe' => $_POST['file_newdescribe']);
                    $file -> save($ar);
                    session('file_oldid',null);
                    session('file_oldname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }else if(empty ($_POST['file_newdescribe'])){
                    $ar = array(
                        'file_id' => session('file_oldid'),
                        'file_user' => session('user_name'),
                        'file_name' => $_POST['file_newname']);
                    $file -> save($ar);
                    session('file_oldid',null);
                    session('file_oldname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }else if(empty($_POST['file_newname'])&&empty($_POST['file_newdescribe'])){
                    session('file_oldid',null);
                    session('file_oldname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }
                else{
                    $ar = array(
                        'file_id' => session('file_oldid'),
                        'file_user' => session('user_name'),
                        'file_name' => $_POST['file_newname'],
                        'file_describe' => $_POST['file_newdescribe']);
                    $file -> save($ar);
                    session('file_oldid',null);
                    session('file_oldname',null);
                    $this -> success('修改成功',U('index.php/Home/Index/right'));
                }
            }
                $this->display();
            }
        function dropfile(){
            $file = new \Model\FileModel();
            $info['file_id']=$_GET['file_id'];
            $info1['file_user']=session('user_name');
            $file -> where($info)->where($info1)->delete();
            $this -> success('删除成功',U('index.php/Home/Index/right'));
            $this ->display();
        }
        function download(){
            $filename='D:\file\file\public\Upload\2017-09-23\demo.txt'; //文件名
            $date = date("Y-m-d__H:i:s",time());
            header( "Content-type:application/octet-stream"); 
            header( "Accept-Ranges:  bytes "); 
            header( "Accept-Length: " .filesize($filename));
            header( "Content-Disposition:attachment;filename= {$date}.doc"); 
            echo file_get_contents($filename);
            readfile($filename); 
        }
        function demo(){
            $demo = new \Model\FileModel();
            $info = $demo->select();
            $this->assign('info',$info);
            $this->display();
        }
}
