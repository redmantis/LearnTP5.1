<?php

/* 
 +----------------------------------------------------------------------
 | SunkenFish [ LISTEN TO THE SHOCKING THUNDERCLAP IN THE QUIET AND NOISELESS PLACE]
 +----------------------------------------------------------------------
 | Copyright (c) 2016-2019 http://www.fakeruhe.com All rights reserved.
 +----------------------------------------------------------------------
 | Author: 黑鱼� <feiyufly001@gmail.com>
 +----------------------------------------------------------------------
 */

namespace app\index\controller;

use think\Controller;

class Route extends Base {

    public function index() {    
        return $this->fetch();
    }

    public function hello($lng='',$name) {
        if(empty($lng)){
            $lng="cn";
        }
        return "你好,{$name}!这是 hello 方法,当前版本是：" . $lng;
    }
    
    public function show($lng = 'cn') {
        $this->assign("lng", $lng);
        $this->assign("action", "show");
        return $this->fetch();
    }
    
    public function show2($lng = 'cn',$name='show2') {
        $this->assign("lng", $lng);
        $this->assign("action", "show2");
        $this->assign("name", $name);
        return $this->fetch();
    }
    
    public function full($full = 'cn') {
        $this->assign("lng", $full);
        $this->assign("action", "full");
        return $this->fetch("show");
    }
}