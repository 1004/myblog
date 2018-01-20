<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/31 0031
 * Time: 16:08
 */
require './basedb.php';
$dbname = $_POST['dbname'];
$tablename = $_POST['tablename'];
$usedb = 'use '.$dbname;
mysqli_query($link,$usedb);
$createsql = 'CREATE TABLE '.$tablename.' (';
$field = $_POST['field'];
$sql = 'CREATE TABLE';
for ($i=0;$i<count($field);$i++){
    $createsql.=$field[$i].' ';
    $createsql.=$_POST['field_type'][$i].' ';
    if (isset($_POST['primarykey'][$i])){
        $createsql.='primary key ';
    }
    if ($i != count($field)-1){
        $createsql.=',';
    }else{
        $createsql.=')';
    }
}
mysqli_query($link,$createsql);
header('Location:dblist.php');

