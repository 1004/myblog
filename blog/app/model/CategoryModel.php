<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/1/16 0016
 * Time: 16:35
 */
class CategoryModel extends Model
{

    public function addAndroidCategroy($name,$ename){
        $sql = "INSERT INTO android_category(category_name,category_e_name,code_num) VALUES ('$name','$ename',0)";
        $result = $this->db->query($sql);
        return $result;
    }

    public function showAndroidCategory(){
        $sql = "SELECT category_name,category_e_name,code_num FROM android_category WHERE 1=1";
        $rows = $this->db->queryAll($sql);
        return $rows;
    }
}