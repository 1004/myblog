<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/11 0011
 * Time: 18:54
 */
if (isset($_COOKIE['name1'])){
    echo $_COOKIE['name1'];
}
@session_start();
if (isset($_COOKIE['age'])){
    var_dump($_SESSION['age']);
}
