<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 18:13
 */
class Model
{
    protected $db ;
    public function __construct()
    {
        $this->initLink();
    }

    private function initLink(){
        $this->db = MyDb::getInstance(Config::getDbConfig());
    }
}