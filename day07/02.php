<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 15:17
 */
require './Manager.php';
$m = Manager::getInstance();
$n = Manager::getInstance();
var_dump($m === $n);

function sayHello(Manager $m){

}

sayHello(Manager::getInstance());

//遍历属性
foreach (Manager::getInstance() as $p_name =>$p_value){
    var_dump($p_name,$p_value);
}
//is_object()
//class_exists()
//interface_exists()
//get_class()
//get_parent_class()
//get_class_vars()
//get_class_methods()
//get_declared_classes()

//__CLASS__ //当前类名
//__METHOD__ //当前方法名 魔术常亮
//var_dump(__FILE__);
//var_dump()
class Stu{
    public function test(){
        var_dump(__CLASS__);
        var_dump(__METHOD__);
        var_dump(__FILE__);
        var_dump(__DIR__);
        var_dump(__LINE__);
    }
}
$stu = new Stu();
$stu->test();