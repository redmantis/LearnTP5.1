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

class Base extends Controller {

    public function initialize() {
        parent::initialize();
        $this->assign('theme', '/pc/theme1/static');
    }

}
