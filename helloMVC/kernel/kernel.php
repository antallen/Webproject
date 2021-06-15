<?php

namespace kernel;
use config\Config;

require_once(APP_PATH.'config/config.php');
class Kernel {

    protected $_config;

    public function __construct(){
        $this->_config = new Config();
    }

    public function run(){
        spl_autoload_register(array($this, 'loadClass'));
        echo $this->_config->show();
/*
    // 初始化一般常用的環境變數
    defined('FRAME_PATH') or define('FRAME_PATH', __DIR__.'../');
    defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
    defined('APP_DEBUG') or define('APP_DEBUG', false);
    defined('CONFIG_PATH') or define('CONFIG_PATH', APP_PATH.'config/');
    defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH.'tmp/');
    // 包含組態設定檔案
    require APP_PATH . '../config/config.php';
    // 包含 MVC 核心檔案
    require FRAME_PATH . '../Core.php';
    // 將核心檔案類別，實例化成可用程式
    //$hello = new Core;
    //$hello->run();
*/
    }

    //自動加載類別
    public function loadClass($className){
        $classMap = $this->classMap();

        if (isset($classMap[$className])){
            $file = $classMap[$className];
        } elseif (strpos($className, '\\') !== false){
            //包含 app 目錄下的文件檔案
            $file = APP_PATH.str_replace('\\','/',$className).'.php';
            if (!is_file($file)){
                return ;
            }
        } else {
            return;
        }
        include $file;
    }

    //類別對應命名空間
    public function classMap(){
        return [
            'kernel\Controller' => CORE_PATH.'Controller.php',
            'kernel\Model' => CORE_PATH.'Model.php',
            'kernel\View' => CORE_PATH.'View.php',
            'kernel\Router' => CORE_PATH.'Router.php'
        ];
    }
}