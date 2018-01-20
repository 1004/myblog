<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2017/4/1 0001
 * Time: 11:13
 */
class MyDb{
    public $host;
    public $port;
    public $user;
    public $pwd;
    public $link;
    public $dbname;
    private static $instance;
    private function __clone()
    {
    }
    private function __construct($params=array())
    {
        $this->host = isset($params['host']) ? $params['host'] : '127.0.0.1';
        $this->port = isset($params['port']) ? $params['port'] : '3306';
        $this->user = isset($params['user']) ? $params['user'] : 'root';
        $this->pwd = isset($params['pwd']) ? $params['pwd'] : '123456';
        $this->dbname = isset($params['dbname']) ? $params['dbname'] :'';
        $this->initLink();
        $this->selectDb();
    }

    public static function getInstance($params=array())
    {
        if (!(self::$instance instanceof self)){
            self::$instance = new self($params);
        }
        return self::$instance;
    }

    private function initLink(){
            if(!($this->link = mysqli_connect("$this->host:$this->port",$this->user,$this->pwd))){
           $this->printErrorSql('连接失败');
       }
    }

    /**
     * 选择数据库
     */
    public function selectDb(){
        $sql = 'USE '.$this->dbname;
        if (!mysqli_query($this->link,$sql)){
            $this->printErrorSql($sql);
        }
    }

    public function query($sql){
        if (!$result = mysqli_query($this->link,$sql)){
            $this->printErrorSql($sql);
            return false;
        }else{
            return $result;
        }
    }

    /**
     * 查询所有数据
     * @param $sql
     * @return array|bool、
     */
    public function queryAll($sql){
        if ($result = $this->query($sql)){
            $rows = array();
            while ($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;//自动创建索引数组
            }
            mysqli_free_result($result);
            return $rows;
        }else{
            return false;
        }
    }

    /**获取一条记录
     * @param $sql
     * @return array|null
     */
    public function fetchRow($sql){
        if($result = $this->query($sql)){
            $rows = array();
            if ($row = mysqli_fetch_assoc($result)){
                $rows = $row;
            }
            mysqli_free_result($result);
            return $rows;
        }else{
            return false;
        }
    }

    /**获取第一条记录的第一个值
     * @param $sql
     * @return bool|string
     */
    public function fetchColumn($sql){
        if ($result = $this->query($sql)){
            $value = '';
            if ($row = mysqli_fetch_row($result)){
                $value = $row[0];
            }
            mysqli_free_result($result);
            return $value;
        }else{
            return false;
        }
    }


    private function printErrorSql($sql){
        echo '执行失败 sql语句是'.$sql.'<br/>';
        echo '错误代码'.mysqli_errno($this->link).'<br/>';
        echo '错误信息'.mysqli_error($this->link).'<br/>';
        die();
    }

}