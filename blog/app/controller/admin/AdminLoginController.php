<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 18:37
 */
class AdminLoginController extends Controller
{

    public function checkByLoginAction(){
        $adminModel = new AdminModel();
        if ($adminModel->checkAdmin($_POST['userName'],$_POST['password'])){
//            echo '登陆成功'.$_POST['userName'];
            $username = $_POST['userName'];
            $this->jump("index.php?p=admin&c=index&a=index&user=$username",'登陆成功',3);
        }else{
            echo '登陆失败';
        }
    }
    public function loginAction(){
        require CURR_VIEW_DIR.'page'.DS.'login.html';
    }
}