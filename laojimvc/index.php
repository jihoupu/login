<?php
/*
  * 入口文件
  * 1.定义常量
  * 2.加载函数库
  * 3.启动框架
  */

// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);


// 加载框架文件
require(APP_PATH . 'fastphp/Web.php');

// 加载配置文件
$config = require(APP_PATH . 'config/config.php');

// 实例化框架类
(new fastphp\Web($config))->run();