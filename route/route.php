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

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('index/hello/:name', 'index/hello');

Route::get('index/test', 'index/test');

Route::get('index/index', 'index/index');

Route::rule('image/index', 'image/index');

//Route::get('index/:name', 'index/_empty');

Route::get('[:lng]/route/index', 'route/index');

Route::get('[:lng]/route/show', 'route/show');//上面的两条路由定义可以简化为一条

Route::get('full/:full$', 'route/full');

Route::get('[:lng]/route/:name', 'route/show2'); //动态地址通用性好，匹配应放在靠后位置，避免与精确匹配间发面冲突

Route::get('mark/:name', 'route/show2')->name('route_mark'); //路由标识 需要确保唯一性

//Route::get('group/index/[:id]', 'group/index')->name('group_mark');

Route::group('group', function () {
    Route::rule('read/[:id]', 'group/read');
    Route::rule('write/[:id]', 'group/write');
    Route::rule('delete/[:id]', 'group/delete');
    Route::rule('index/[:id]', 'group/index')->name('group_index');
})->ext('html')->pattern(['id' => '\d+']);

Route::group('group', function () {
    Route::rule('read/[:id]', 'group/read');
    Route::rule('write/[:id]', 'group/write');
    Route::rule('delete/[:id]', 'group/delete');
    Route::rule('index/[:id]', 'index')->name('group_index');
})->prefix('group/')->ext('html')->pattern(['id' => '\d+']);

//Route::group('group/', function () {
//    Route::read('[:id]', 'group/read');
//    Route::write('[:id]', 'group/write');
//    Route::delete('[:id]', 'group/delete');
//    Route::index('[:id]', 'group/index');
//})->prefix('group/')->ext('html')->pattern(['id' => '\d+']);

//Route::group('group', function () {
//    Route::get('read/:id', 'read');
//    Route::get('write/:id', 'write');
//    Route::get('del/:id', 'del');
//    Route::get('index/[:id]', 'index');
//})->prefix('group/')->ext('html')->pattern(['id' => '\d+']);

return [
];
