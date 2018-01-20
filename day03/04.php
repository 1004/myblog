<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/3/30 0030
 * Time: 14:54
 */
$people = array(
    'name'=>'xky',
    'age'=>19,
    'address'=>'山东'
);

//for($i= 0;$i<count($people);$i++) 容易遍历索引数组
//第一种遍历方式
echo "第一种遍历方式".'<br/>';
for($i= 0;$i<count($people);$i++){
    if (key($people) !== null){
        echo '值：'.current($people).'键'.key($people).'<br/>';
        next($people);//指针下移
    }
}
echo "第二种遍历方式".'<br/>';
//第二种遍历方式
foreach ($people as $key=>$value){
    echo '值：'.$value.'键'.$key.'<br/>';
}
echo "第三种遍历方式".'<br/>';
foreach ($people as $value){
    echo '值'.$value;
}
echo "第四种遍历方式".'<br/>';

while ($element = each($people)){
    echo $element['key'].$element['value'];
}