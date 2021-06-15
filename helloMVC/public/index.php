<?php
use kernel\Kernel;

// 設定應用程式目錄為當前目錄
define('APP_PATH', __DIR__.'/../');

// 開啟除錯模式
define('APP_DEBUG', true);

// 網站根目錄
define('APP_URL', 'http://helloMVC');

// 載入框架
require(APP_PATH.'kernel/kernel.php');

// 產生實例化物件
(new Kernel())->run();