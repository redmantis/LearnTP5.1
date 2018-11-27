<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => 'localhost',
    // 数据库名
    'database' => 'fakeruhe',
    // 用户名
    'username' => 'fakeruhe',
    // 密码
    'password' => 'fakeruhe',
    // 端口
    'hostport' => 3306,
    // 连接dsn
    'dsn' => '',
    // 数据库连接参数
    'params' => [
        PDO::ATTR_PERSISTENT => true,
    ],
    // 数据库编码默认采用utf8
    'charset' => 'utf8',
    // 数据库表前缀
    'prefix' => 'jp_',
    // 数据库调试模式
    'debug' => true,
   
];
