<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/30 0030
 * Time: 11:29
 */

function sayHello($name){
    echo "hellow $name";
}

sayHello('xky');

function aa(){
    echo '我是aa'.'<br/>';
}

function bb(){
    echo  '我是bb'.'<br/>';
}

function cc(){
    echo  '我是cc'.'<br/>';
}

//可变函数，根据函数名
$funname = 'aa';
$funname();
$funname = 'bb';
$funname();
$funname = 'cc';
$funname();

$niming = function (){
    echo "我是匿名函数".'<br/>';
};

$niming();
var_dump($niming);

function yinyong(& $na){
    $na = '我改变这个值'.'<br/>';
}
$orgin = '我是原始值';
yinyong($orgin);//引用传至
echo $orgin."<br>";

function mo($n,$m='pwd'){
    echo $n.'hhh'.$m;
}

mo('dd');

function addf(){
    $args  = func_get_args();
    $count = 0;
    if (!empty($args)){
        for ($i = 0;$i<count($args);$i++){
            $count+=$args[$i];
        }
    }
    echo '总和为'.$count.'<br/>';
    return $count;
}

addf();
addf(10,20,40);
addf(1,3,4);

$myresult = addf(1,1);
echo '结果是'.$myresult."<br/>";

function & y(){//引用返回
    $na = 'kk';
    require $na;
}

