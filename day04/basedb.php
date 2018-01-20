<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/31 0031
 * Time: 10:02
 */
$host = '127.0.0.1';
$use = 'root';
$pwd = '123456';
$port = '3306';
if(!$link = mysqli_connect("$host:$port",$use,$pwd)){
    die("连接失败");
}else {
    echo '连接成功'.'<br/>';
}
