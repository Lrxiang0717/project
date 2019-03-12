<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Model;
use Think\Model;

class FileModel extends Model{
    function checkIdName($id,$name){
        $info = $this -> getByfile_id($id);
        if($info != null){
            if($info['file_name'] != $name){
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
