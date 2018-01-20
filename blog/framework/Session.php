<?php

/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/12 0012
 * Time: 14:56
 */
class Session
{
    private $db;
    function __construct()
    {
        session_set_save_handler(array($this,'sess_open'),array($this,'sess_close'),array($this,'sess_read'),array($this,'sess_write'),array($this,'sess_destory'),array($this,'sess_gc'));
        ini_set('session.save_handler', 'user');
        session_start();
    }

    public function init(){
//        $open, $close, $read, $write, $destroy, $gc, $create_sid)
        $this->db = MyDb::getInstance(Config::getDbConfig());
    }
    public function sess_open(){
        $this->init();
        return true;
    }
    public function sess_close(){
        return true;
    }
    public function sess_read($sess_id){
        $sql = "select sess_data from `session` where sess_id='$sess_id'";
        $result = $this->db->fetchColumn($sql);
        if ($result){
            return $result;
        }else{
            return '';
        }
    }
    public function sess_write($sess_id,$sess_data){
        $s_expire = time();
        $sql = "insert into `session` values('$sess_id','$sess_data','$s_expire') on duplicate key update sess_data='$sess_data',expire='$s_expire'";
        return $this->db->query($sql);
    }
    public function sess_destory($sess_id){
        $sql = "delete from  `session` WHERE sess_id='$sess_id'";
        return $this->db->query($sql);
    }

    public function sess_gc($ttl){
        $now = time();
        $last = $now-$ttl;
        $sql = "delete from `session` WHERE expire<$last";
        return $this->db->query($sql);
    }

}