<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/1 0001
 * Time: 10:57
 */
class Student{
    public $name;
    public $age;
    public function eat(){
        echo '吃饭'.$this->name;
    }

    public function baoming(){
        echo $this->name.'报名了';
    }
}

class Teacher{
    const PI = 3.14;
    public static $count;
    public $id;
    public $name;
    function __construct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
        self::$count++;
    }

    public function showInfo(){
        echo '老师名字：'.$this->name.$this->id;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'release';
        self::$count--;
    }
    public static function staticInf(){
        echo self::$count.self::PI;
    }
}

class Info{
    public $name;
    public function f(){

    }
    public static $s_name;
    public static function s_f(){

    }
    const PI=0;
}

$stu = new Student();
$stu->eat();
$stu->age = 11;
$stu->name = 'xky';
echo $stu->name;

$stu->baoming();

$tea = new Teacher(1,'laoxie');
$tea->showInfo();
echo Teacher::$count;
echo Teacher::PI;

unset($tea);
echo Teacher::$count;
require 'MyDb.php';
$params = require './dbconfig.php';
$db = new MyDb($params);
$db->selectDb();

