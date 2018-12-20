<?php

namespace app\index\behavior;
use think\facade\View;

class Test {

    public function run($params) {
        $view_base = config('template.view_base');
        $new_view_base = str_replace("__THEME_NAME__", "views", $view_base); //替换主题名称
        View :: config('view_base', $new_view_base); //完成配置修改   
    }
}
