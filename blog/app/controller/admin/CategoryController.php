<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/1/16 0016
 * Time: 14:44
 */
class CategoryController extends Controller
{
    public function showAndroidAction(){
        $model = new CategoryModel();
        $rows = $model->showAndroidCategory();
        require CURR_VIEW_DIR.'views'.DS.'category.html';
    }

    public function showAddCategoryAction(){
        require CURR_VIEW_DIR.'views'.DS.'addcategory.html';
    }



    /**
     * 添加android分类addcategory
     */
    public function addCategoryAction(){
        $model = new CategoryModel();
        $name = $_POST['category_name'];
        $ename = $_POST['category_e_name'];
        if (empty($name) || empty($ename)){
            $this->showAddCategoryAction();
        }else{
            $model->addAndroidCategroy($name,$ename);
            $this->showAndroidAction();
        }
    }
}