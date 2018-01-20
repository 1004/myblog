<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/31 0031
 * Time: 15:41
 */
require './basedb.php';
$dbname = $_GET['dbname'];
if (isset($dbname) && !empty($dbname)){
    $sql1 = 'use '.$dbname;
    $index = 'Tables_in_'.$dbname;
    $result = mysqli_query($link,$sql1);
    if ($result){
        $sql = 'show tables';
        $result2 = mysqli_query($link,$sql);
        if ($result2){
            while ($row = mysqli_fetch_assoc($result2)){
//               var_dump($row);
                echo $row[$index].'<a href="datalist.php?dbname='.$dbname.'&tablename='.$row[$index].'">查询</a>'.'<br/>';
            }
        }
    }
}else{
    echo '查询失败';
}

echo '<a href="addtable_1.php?dbname='.$dbname.'">添加表格</a>';