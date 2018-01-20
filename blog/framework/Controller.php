<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 18:13
 */
class Controller
{

    function __construct()
    {
    }

    /**
     * 跳转
     * @param $url
     * @param string $msg
     * @param int $time
     */
    public function jump($url,$msg='',$time=3){
        if ($msg == ''){
            header('Location:'.$url);
        }elseif (file_exists(CURR_VIEW_DIR.'jump.html')){
            require CURR_VIEW_DIR.'jump.html';
        }else{
            echo <<<HTML
<head>
    <title>$msg</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="refresh" content="$time;url=$url">
</head>
 <body>$msg</body>
HTML;

        }
        die();
    }

}