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
use think\facade\App;
use think\Controller;
use QcloudImage\CIClient;

/**
 * Description of Group
 * 路由分组测试
 * @author RDM
 */
class Group extends Base {
 
    public function index() {
        $this->assign("curent_action", "index");
        return $this->fetch();
    }

    public function read() {
        $this->assign("curent_action", "read");
        return $this->fetch("index");
    }

    public function write() {
        $this->assign("curent_action", "write");
        return $this->fetch("index");
    }

    public function delete() {
        $this->assign("curent_action", "delete");
        return $this->fetch("index");
    }

}
