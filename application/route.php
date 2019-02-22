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

//使用路由的方式实现，地址一旦被定义过路由以后，之前的地址就会失效
use think\Route;

//Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）');
//请求类型包括：GET POST DELETE PUT *（默认类型）

//Route::rule('hello','sample/Test/hello','GET|POST',['https'=> false,]);

//Route::get('hello/:id','sample/Test/hello');
//Route::post('hello/:id','sample/Test/hello');
//Route::any('hello','sample/Test/hello'); //对应的是类型为*的方式。

Route::get('banner/:id','api/v1.Banner/getBanner');//路由地址顺序：模块/控制器名/方法
