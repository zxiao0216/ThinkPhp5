<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
//更改log日志的存放位置，在根目录下生成一个log文件夹
define('LOG_PATH', __DIR__ . '/../log/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

//初始化开启sql日志 开发模式开启，生产模式尽量不要开启
\think\Log::init([
    'type' => 'File',
    'path' => LOG_PATH,
    'level' => ['aql']
]);