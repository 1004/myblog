<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 15:01
 */
class Yang
{
    public $name;
    public $isclone;

    function __construct()
    {
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    function __clone()
    {
        $this->isclone = true;
        // TODO: Implement __clone() method.
    }

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        //当设置不可以访问的属性时候，不至于使用默认的，不存在则创建
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
        //当访问不可以访问的属性的时候 触发
    }

    function __isset($name)
    {
        // TODO: Implement __isset() method.
        //判断一个不存在的属性时候
    }

    function __unset($name)
    {
        // TODO: Implement __unset() method.
        //销毁一个不存在的属性的时候
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
//        spl_autoload_register 注册自动加载的函数
        //和java差不多
        return '';
    }
}