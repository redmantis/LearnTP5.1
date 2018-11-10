<?php

namespace app\index\behavior;
use think\facade\View;

class Test 
{
    public function run($params) {
        $v = config('template.view_base');
        $v = str_replace("view", "views", $v);
//        config('template.view_base', $v);
//        echo config('template.view_base')."{$v}<br />";
        
//        $view_path = env('app_path') . request() -> module() . '/view/';
//        if(request() -> isMobile() !== true){
//            $view_path .= 'default/';
//        }else{
//            $view_path .= 'mobile/';
//        }
//        echo $view_path;
        
        View :: config('view_base', $v);
    }
}
