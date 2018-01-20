<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/12/29 0029
 * Time: 10:57
 */

$a = 9;
$c = 1;
$md = md5(($a+$c)."");
//echo $md.'<br/>';
$code = 0;
switch ($code) {
    case 0:
           echo 'one';
        break;
    case 1:
            echo 'two';
        break;
}

for($i =0 ;$i<100;$i++){
//    echo $i;
}


$hello = 'xky';
$$hello = 'nihao';
//echo $xky;

$arr1 = array(0,1,3,4,5,6);
$arr2 = array('name'=>'xky','age'=>14);
echo json_encode($arr2);
//echo $arr2['name'];

echo strlen($hello);