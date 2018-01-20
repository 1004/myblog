<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 18:38
 */
class Router
{
    /**
     * 分发
     */
    public function dispatch(){
        if (isset($_GET['c']) && isset($_GET['a'])){
            $controller_name = $_GET['c'].'Controller';
            $action_name = $_GET['a'].'Action';
            $controller = new $controller_name();//可变类名
            $controller->$action_name();//可变函数
        }
    }
}