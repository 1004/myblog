<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/30 0030
 * Time: 14:20
 */

$v1 = 1000;
function add_100(){
    $GLOBALS['v1']-=100;
}

add_100();
echo $v1.'<br>';
/**
 * 静态局部变量只会初始化一次
 */
function test_static(){
    static $v2 = 10;
    $v2++;
    $name = __FUNCTION__;
    echo $v2.$name.'<br/>';
}

test_static();
test_static();
test_static();

$op = 'max';
if ($op == 'max'){
    $value = create_function('$n,$m','return max($n,$m);');
}else{
    $value = create_function('$n,$m','return min($n,$m);');
}

$r = $value(4,5);
echo '计算结果'.$r;
$v3 = 'xky';
function outer($arg){
    $inner = function ()use ($arg){//匿名函数可以试用外部参数 可以值传递也可以地址传递
        echo '我是'.$arg;
    };
    $inner();
}

outer($v3);

echo '<br>';
//array_map() 把数组中内容传递到函数中进行操作，返回值进行存储
$args = array(190,300,4004,500);
$result2 = array_map(function ($n){return $n*$n;},$args);
var_dump($result2);
echo '<br/>';
