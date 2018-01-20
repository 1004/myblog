<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/31 0031
 * Time: 10:04
 */
require './basedb.php';
//查询所有的数据库
$sqllist = 'show databases';
$result = mysqli_query($link,$sqllist);
if (!$result){
    mysqli_errno($link);
    mysqli_error($link);
    die('查询失败'.$sqllist);
}

while ($row = mysqli_fetch_assoc($result)){
    echo $row['Database'].'<a href="dbdrop.php?dbname='.$row['Database'].'">删除</a>'.'   <a href="tablelist.php?dbname='.$row['Database'].'">查询</a>'.'<br/>';
}

echo '<a href="adddblist.php">增加数据库</a>';