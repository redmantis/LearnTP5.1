<?php

namespace app\common\model\admin;
use think\Model;
use think\Db;

class Admin extends Model {

//    protected $table = "zf_rooms";

//    public function initialize() {
//        $prefix = config('database.prefix');
//         $this->table = $prefix . $this->table; //当前基表全名
//         $this->table = $prefix . "zf_rooms"; //当前基表全名
//        parent::initialize();
//    }
    
    /**
     * 用户名获取器
     * @param type $value
     * @return type
     */    
    public function setUserNameAttr($value)
    {
        return strtolower($value);
    }
    
    public function setPwdAttr($value) {
        $salt = "123456";
        $this->salt = $salt;
        return md5(md5($value) . $salt);     
    }

    public function setSaltAttr($value) {
        return $value;
    }

    /**
     * 用户名修改器
     * @param type $value
     * @return type
     */
    public function getUserNameAttr($value){
        return strtoupper($value);
    }
    
    
    public function getAddtimeAttr($value) {
        return date("Y-m-d H:i:s", $value);
    }

    /**
     * 数据列表获取
     * @return type
     */
    public function getlist() {
        return $this->select();
    }

}
