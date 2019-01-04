<?php

namespace app\index\behavior;
use think\facade\View;

class Test {

    public function run($params) {
        $view_base = config('template.view_base');
        $new_view_base = str_replace(["__MODULAR_NAME__", "__THEME_NAME__"], ["pc", "theme1"], $view_base); //替换主题名称
        View :: config('view_base', $new_view_base); //完成配置修改       

        $view_path = config('template.view_path');
        $new_view_path = str_replace(["__MODULAR_NAME__", "__THEME_NAME__"], ["pc", "theme1"], $view_path); //替换主题名称
        View :: config('view_path', $new_view_path); //完成配置修改    
    }
}
