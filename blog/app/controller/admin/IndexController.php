<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/7 0007
 * Time: 15:05
 */
class IndexController extends Controller
{
    public function indexAction(){
        define('USERNAME',isset($_GET['user']) ? $_GET['user'] : '');
        require CURR_VIEW_DIR.'page'.DS.'index.html';
//        require CURR_VIEW_DIR.'page'.DS.'index.html';
    }

    public function topAction(){
//        require CURR_VIEW_DIR.'top.html';
    }

    public function dragAction(){
//        require CURR_VIEW_DIR.'drag.html';
    }
    public function contentAction(){
//        require CURR_VIEW_DIR.'content.html';
    }
}