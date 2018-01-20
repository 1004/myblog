<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/11 0011
 * Time: 18:52
 */
setcookie('name1','xky');
session_start();
session_destroy();
$_SESSION= array();
setcookie('PHPSESSID','',time()-1);//设置cookie过期