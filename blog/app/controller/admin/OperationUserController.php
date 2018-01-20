<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/1/15 0015
 * Time: 15:59
 */
class OperationUserController extends Controller
{
    private $userModel ;

    function __construct()
    {
        parent::__construct();
        $this->initModel();
    }

    /**
     * 初始化模型
     */
    private function initModel(){
        $this->userModel = new UserModel();
    }

    /**
     * 用户列表
     */
    public function userListAction(){
        $rows = $this->userModel->getUserList();
        require CURR_VIEW_DIR.'views'.DS.'userlist.html';
    }

    /**
     * 展示添加用户
     */
    public function showAddUserAction(){
        require CURR_VIEW_DIR.'views'.DS.'adduser.html';
    }

    /**
     * 添加用户
     */
    public function addUserAction(){
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
        if (empty($name) ||  empty($pwd)){
            $this->showAddUserAction();
        }else{
           $result =  $this->userModel->addUser($name,$pwd);
           if ($result){
               $this->userListAction();
           }else{
               $this->showAddUserAction();
           }
        }
    }

    /**
     * 删除管理员
     */
    public function deleteUserAction(){
        $id = $_GET['id'];
        $this->userModel->deleteUser($id);
        $this->userListAction();
    }

    /**
     * 用户列表
     */
    public function searchUserAction(){
        require CURR_VIEW_DIR.'page'.DS.'test2.html';
    }

    /**
     * 首页
     */
    public function homeAction(){
        require CURR_VIEW_DIR.'page'.DS.'test2.html';
    }

}