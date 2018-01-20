<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/5 0005
 * Time: 11:56
 */
require_once './ABase.php';
class MyObj extends ABase{

    public function getName()
    {
        echo '牛逼啊'.$this->name;
    }
}