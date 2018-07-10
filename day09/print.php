<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/2/27 0027
 * Time: 11:41
 */

//索引数组
$data = array(
    'name'=>'xky',
    'age'=>'23',
    'like'=>array(
        'book','basketball'
    )
);

//print_r($data);

//echo '<br>';

//var_dump($data);

//echo '<br>';

function myprint($data) {
       $str = '<pre style="display:block;padding: 9.5px;margin: 44px 0 0 0 ;font-size: 13px;line-height: 1.4;color: #333;word-break: break-all;word-wrap:break-word;background-color: #f5f5f5;border: 1px solid #ccc;border-radius: 4px">';
       if (is_bool($data)){
           $show_data = $data ? 'true' : 'false';
       }else if (is_null($data)){
           $show_data = 'null';
       }else {
           $show_data = print_r($data,true);
       }
       $str.=$show_data;
       $str.='</pre>';
       echo $str;
}

//myprint($data);



