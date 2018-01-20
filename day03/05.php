<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/30 0030
 * Time: 15:26
 */

$upper = range('a','z');
var_dump($upper);
echo '<br/>';
$lower = range('A','Z');
var_dump($lower);
echo '<br/>';
$chars = array_merge($upper,$lower);
var_dump($chars);
echo '<br/>';
$arry_random_key = array_rand($chars);
var_dump($arry_random_key);
var_dump($chars[$arry_random_key]);
echo '<br/>';
shuffle($chars);
var_dump($chars);
echo '<br/>';
var_dump(array_keys($chars));
var_dump(array_values($chars));
echo '<br/>';
var_dump(in_array('A',$chars));
echo '<br/>';
var_dump(array_key_exists(-1,$chars));
echo '<br/>';
var_dump(isset($chars[0]));
unset($chars[0]);
var_dump(isset($chars[0]));
echo '<br/>';
//var_dump(array_fill(0,1000,1));
$array2 = array('卢布','诸葛亮','赵云','关凤');
var_dump(array_chunk($array2,2));
echo '<br/>';
var_dump(implode(',',$array2));
$str = 'one,two,three';
var_dump(explode(',',$str));
echo '<br/>';
$array3 = array(
  1,3,4,5,56,6,6
);
$array4 = array(23,3,4,54,5,65,4);
var_dump(array_map('max',$array3,$array4));
echo '<br/>';
array_walk($array4,function ($value,$key){
   var_dump($value,$key);
});
echo '<br/>';
//sort()
//ksort()
//rsort()
//krsort()
//asort()
//arsort()
//natsort()
//usort()