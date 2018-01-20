<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 18:11
 */
class Config{
    /**
     * 获取数据库的基本配置
     */
    public static function getDbConfig(){
        $options = array(
            'host'=>'127.0.0.1',
            'port'=>'3306',
            'user'=> 'root',
            'pwd'=>'123456',
            'dbname'=>'x_blog'
        );
        return $options;
    }
}