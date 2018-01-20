<?php

/**
 * 单例
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 15:15
 */
class Manager
{
    private static $instance = null;
    private function __construct()
    {
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function getInstance(){
        if (!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}