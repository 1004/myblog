<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/2/27 0027
 * Time: 15:12
 */

namespace day09\bean;


/**
 * Class Teacher
 * @package bean 老师
 */
class Teacher
{
    private $name;
    private $age;

    function __construct()
    {
        echo 'Laoshi';
    }


    /**
     * 动态设置GET 和 SET 方法
     * @param $name
     * @param $value
     */
    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __get($name)
    {
        return $this->$name;
    }
}