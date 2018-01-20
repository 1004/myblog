<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/28 0028
 * Time: 21:11
 */
$a = "PHP";
if(isset($a)){
    echo "已经设置了$a <br/>";
}
unset($a);
if (!isset($a)){
    echo "未设置<br/>";
}

$b = "JAVA";
echo "b = $b<br/>";
$c = $b;
echo "c=$c <br/>";
$d = &$b;
$d = "MySql";
echo "b = $b<br/>";

$name = "world";
$$name = "beijing";
echo "$world <br/>";

//$name = $_GET['name'];
//echo "名字是$name<br>";

//echo $_SERVER[PHP_SELF];
//print_r($_SERVER);

define("BASEPATH","www.xky.com");
if (defined("BASEPATH")){
    echo BASEPATH;
}
//print_r(get_defined_constants());
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo dirname(__FILE__);
echo "<br>";
var_dump($name);
echo "<Br>";

$letter = "foot";
echo 'i like $letter';
echo "i like $letter";
echo 'i like {$letter}';
echo "i like {$letter}";
echo "<br>";

$feiyun = "www.feiyun.tv";
$info = <<<HTML
    <div id="header">
        <ul>
        <li><a href=''>$feiyun</a></li>
</ul>
</div>
<script type="text/jarvascript">
    alert('hello');
</script> 
HTML;

echo $info;

$arr1 = array("01","02","03","04");
$arr2 = array("name"=>"hellow","age"=>4);
echo $arr2["name"];
echo $arr2["age"];

class Person{
    var $name ="kk";
    var $age=32;

    public function say(){
        echo "hello";
    }
}

$p = new Person();
echo $p->age;
echo $p->name;
echo $p->say();
echo "<br>";

if(isset($_GET['value'])){//只要设定值了，就为true
    $value = $_GET['value'];//0是默认为空的
    if (!empty($value)){
        echo $value;
    }
}
echo "<br>";

$a = "hehe";
$b = "cc";
$c = $a.$b;
echo $c;
echo "<br>";

$d = 10;
;

$mj = array('张三','李四','王五');
for ($i = 0 ;$i<=(count($mj)-1);$i++){
    echo $mj[$i]." ";
}
echo '<Br>';