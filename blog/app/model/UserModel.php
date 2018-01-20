<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/1/15 0015
 * Time: 18:17
 */
class UserModel extends Model
{
    /**
     * 获取所有的普通管理员
     */
    public function getUserList(){
        $sql = "select * from x_common_admin WHERE 1=1";
        $result =  $this->db->queryAll($sql);
        return $result;
    }

    /**
     * 添加用户
     * @param $name
     * @param $pwd
     */
    public function addUser($name,$pwd){
        $reIP=$_SERVER["REMOTE_ADDR"];
        $time = time();
        $pwdm = md5($pwd);
        $sql = "insert into x_common_admin(name,pwd,last_login,last_ip) values('$name','$pwdm',$time,'$reIP')";
        $result = $this->db->query($sql);
        return $result;
    }

    /**
     * 删除用户
     * @param $id
     */
    public function deleteUser($id){
        $sql = "delete from x_common_admin WHERE id='$id'";
        $result = $this->db->query($sql);
        return $result;
    }
}