<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


// 配置式的路由器写法
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];



//动态注册的路由器写法
//动态注册
//
//路由定义采用\think\Route类的rule方法注册，通常是在应用的路由配置文件application/route.php进行注册，格式是：
//
//Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）');
//例如注册如下路由规则：
//
//use think\Route;
//// 注册路由到index模块的News控制器的read操作
//Route::rule('new/:id','index/News/read');

//GET,POST,DELETE,PUT,*


use think\Route;
//Route::rule('hello','sample/Test/hello','GET',['https'=> TRUE]);
//Route::rule('hello','sample/Test/hello','GET|POST');

Route::get('hello','sample/Test/hello');
Route::get('banner/:id','api/v1.Banner/getBanner');