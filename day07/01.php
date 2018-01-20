<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 11:47
 */
$data = 'hello world';
//file_put_contents('./data.txt',$data);

//$receive = file_get_contents('./data.txt');
//var_dump($receive);

$b_d = false;
$s_b_d = serialize($b_d);//对非字符串的数据进行 序列化成字符串 然后存储
//var_dump($s_b_d);
//file_put_contents('./data.txt',$s_b_d);
//$v = unserialize(file_get_contents('./data.txt')); //获取字符串后 对字符串反序列化 然后可以获取真实值
//var_dump($v);
require './Yang.php';
$yang = new Yang();
$yang->name='多里';
var_dump($yang);
$y2 = clone $yang;
var_dump($y2);