<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/5 0005
 * Time: 11:38
 */
require 'Book.php';
$b = new Book();
echo $b->sayHello().'<br/>';
var_dump($b instanceof Good);
var_dump($b instanceof Book);

function __autoload($class_name){
    var_dump($class_name);
    require '../day05/'.$class_name.'.php';
}

$db = new MyDb();

