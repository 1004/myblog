<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/2/27 0027
 * Time: 16:40
 */

require './print.php';

$arry = array(
  's1'=>array(
      'age'=>10,
      'name'=>'xky'
  ),
  's2'=>array(
      'age'=>14,
      'name'=>'wch'
  ),
  's3'=>array(
      'age'=>4,
      'name'=>'wst'
  ),
  's4'=>array(
      'age'=>1,
      'name'=>'my'
  ),
  's5'=>array(
      'age'=>10,
      'name'=>'xlf'
  )
);

/**
 * 自定义排序规则
 * @param $a
 * @param $b
 */
function mysort($a,$b){
    $first = isset($a['age']) ? $a['age'] : 0;
    $next = isset($b['age']) ? $b['age'] : 0;

    if ($first == $next){
        return 0;
    }else{
        return $first > $next ? 1 : -1;
    }
}
echo  '排序前';
myprint($arry);
usort($arry,'mysort');
echo  '排序后';
myprint($arry);


