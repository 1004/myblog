<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/30 0030
 * Time: 16:58
 */
$host = '127.0.0.1';
$use = 'root';
$pwd = '123456';
$port = '3306';
$database = 'xky';
//$con=mysqli_connect("localhost","my_user","my_password","my_db");
if(!$link = mysqli_connect("$host:$port",$use,$pwd,$database)){
    die("连接失败");
}else {
    echo '连接成功'.'<br/>';
}
$sql = 'select * from stu';
$resutl = mysqli_query($link,$sql);
if (!$resutl){
    echo mysqli_errno($link);
    die('执行失败');
}

while ($row = mysqli_fetch_assoc($resutl)){
    echo $row['id'].'__'.$row['name'];
}
mysqli_free_result($resutl);
mysqli_close($link);


