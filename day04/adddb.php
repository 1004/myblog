<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/31 0031
 * Time: 15:28
 */
require './basedb.php';
if (isset($_POST['dbname']) && !empty($_POST['dbname'])){
    $dbname = $_POST['dbname'];
    $sql = 'CREATE DATABASE '.$dbname;
    if($result = mysqli_query($link,$sql)){
        header('Location:dblist.php');
    }else{
        mysqli_error($link);
        mysqli_errno($link);
        echo '执行失败'.$sql;
    }

}else{
    echo '参数缺失';
}
