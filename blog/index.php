<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 17:32
 */
define('DS',DIRECTORY_SEPARATOR);
define('ROOT_DIR',dirname(__FILE__).DS);
define('APP_DIR',ROOT_DIR.'app'.DS);
define('FRAMEWROK_DIR',ROOT_DIR.'framework'.DS);
define('CONTROLLER_DIR',APP_DIR.'controller'.DS);
define('MODEL_DIR',APP_DIR.'model'.DS);
define('VIEW_DIR',APP_DIR.'view'.DS);
define('CONFIG_DIR',FRAMEWROK_DIR.'config'.DS);
define('PLATFORM',isset($_GET['p']) ? $_GET['p'] : 'front');
define('CURR_CONTROLLER_DIR',CONTROLLER_DIR.PLATFORM.DS);
define('CURR_VIEW_DIR',VIEW_DIR.PLATFORM.DS);

define('CONTROLLER','Controller');
define('MODEL','Model');

/**
 * 自动载入
 * @param $class_name
 */
function __autoload($class_name){
    //特殊
    $special = array(
        'Config'=>CONFIG_DIR.$class_name.'.php',
        'Controller'=>FRAMEWROK_DIR.$class_name.'.php',
        'Model'=>FRAMEWROK_DIR.$class_name.'.php',
        'MyDb'=>FRAMEWROK_DIR.$class_name.'.php',
        'Router'=>FRAMEWROK_DIR.$class_name.'.php',
        'Session'=>FRAMEWROK_DIR.$class_name.'.php'
    );
   if (isset($special[$class_name])){
       require $special[$class_name];
   }elseif (substr($class_name,-strlen(CONTROLLER)) == CONTROLLER){
        //控制器
       require CURR_CONTROLLER_DIR.$class_name.'.php';
   }elseif (substr($class_name,-strlen(MODEL)) == MODEL){
       //模型
       require MODEL_DIR.$class_name.'.php';
   }
}
//session
$session = new Session();


//路由分发
$r = new Router();
$r->dispatch();

//$_SESSION['islogin'] = 'yes';
//var_dump($_SESSION['islogin']);



