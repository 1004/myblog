<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/6 0006
 * Time: 18:43
 */
class AdminModel extends Model
{

    /**
     * 检测用户名和密码
     * @param $name
     * @param $pwd
     * @return bool
     */
    public function checkAdmin($name,$pwd){
        $md_pwd = md5($pwd);
        $sql = "select * from x_admin where admin_name='$name' AND admin_pwd='$md_pwd'";
        $result = $this->db->fetchRow($sql);
        return (bool) $result;
    }
}