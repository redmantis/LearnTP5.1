<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller {

    public function index() {
       /*
//        添加一条数据
//        第一种是实例化模型对象后赋值并保存：
        $admin=new \app\common\model\admin\Admin();
        $admin->user_name = "新增用户";
        $admin->pwd = "1234567";
        $admin->addtime = time();
        $admin->status = 1;
        $admin->save();
        
//        直接传入数据到save方法批量赋值
        $admin->save(['user_name'=>'直接传入数据','pwd'=>'pwd','addtime'=> time()]);
        
//        或者直接在实例化的时候传入数据
         $db=new \app\common\model\admin\Admin(['user_name'=>'直接实例化传值','pwd'=>'pwd','addtime'=> time()]);
         $db->save();
         */
        /**
         * 数据查询
         */
        $admin=new \app\common\model\admin\Admin();
        $rs=$admin->getlist();      
        
//        foreach ($rs as $v) {     
//            echo "{$v['id']}-{$v['user_name']}-{$v['addtime']}<br />";
//        }   

        var_dump($rs);
//          $data['id']=21;
//        $data['title'] = "whesssre";
//        $db->data($data, true);
//        $db->save();
//        $r = $db->update($data);
//        var_dump($r);
        return;
//        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5') {
//           return $this->fetch();
        return 'hello,你好' . $name;
    }
    
    public function test() {
   
        \think\facade\Cache::clear();
        return $this->fetch();
    }

    public function _empty($name) {
        return 'hello:' . $name;
    }

}
