<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/2/27 0027
 * Time: 17:35
 */

function randomnum($start,$end,$length) {
    $count = 0;
    $temp = array();

    while ($count < $length) {
        $data[] = mt_rand($start,$end);
        $temp = array_unique($data);
        $count = count($temp);
    }
    sort($temp);
    return $temp;
}

function checkStr($str,$mystr){
    if (strpos($str,strval($mystr)) === false){
        return '不存在';
    }else {
        return '存在';
    }
}

echo  checkStr('xky1','1');


//print_r(randomnum(1,10,4));

