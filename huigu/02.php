<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/12/29 0029
 * Time: 11:16
 */
require './in.php';

define('PATH',__DIR__.DIRECTORY_SEPARATOR);

echo PATH_SEPARATOR;


$config = require './db.php';

die('game over');
echo $config['name'];

function say(){

}

say();

$myfun1 = function (){

};

$myfun1();

function abc($n1,& $n2,$n3='laoxie'){
    $args = func_get_args();
};

function & f1(){
    $val = 10;
    return $val;
}

$v = & f1();


//$_GET
$GLOBALS['v1'] = 'xky'; //超全局  可以跨域访问



