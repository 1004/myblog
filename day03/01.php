<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/30 0030
 * Time: 10:51
 */
if (isset($_GET['name'])){
    $name = $_GET['name'];
    if (!empty($name)){
        echo "用户名正确：".$name;
    }else{
        goto ERROR;
    }
}else{
    goto ERROR;
}

if (isset($_GET['pwd'])){
    $pwd = $_GET['pwd'];
    if (!empty($pwd)){
        echo "密码正确".$pwd;
    }else{
        goto ERROR;
    }
}else{
    goto ERROR;
}

ERROR:
echo "用户名或者密码错误";
require_once  "./header.html";
echo "我是主题内容";
for ($i = 0;$i<10;$i++){
    echo "$i";
}
echo "<br>";
require_once  "./footer.php";

echo '<br>';
$ccontent = require './config.php';
print_r($ccontent);