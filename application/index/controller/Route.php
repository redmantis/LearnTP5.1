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

    public function hello($name = 'ThinkPHP5') {
        return 'hello,你好' . $name;
    }
    
    public function test() {   
        return $this->fetch();
    }

    public function _empty($name) {
        return 'hello:' . $name;
    }
}