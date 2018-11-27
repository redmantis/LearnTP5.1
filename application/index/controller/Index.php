<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller {

    public function index() {
        
//        var_dump(config('database.prefix'));
//        return;
        
        $db=new \app\common\model\admin\Admin();
        $rs=$db->getlist();        
        foreach ($rs as $admin) {     
            echo "{$admin['id']}-{$admin['name']}-{$admin['truename']}<br />";
        }
//        $rs = db('admin')->where('status',1)->select();
//        var_dump($rs);
        return;
//        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5') {
//           return $this->fetch();
        return 'hello,你好' . $name;
    }

}
