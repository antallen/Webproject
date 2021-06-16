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
        $this->unregisterGlobals();
        $this->_config->show();
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
    //取消全域自定義變數
    public function unregisterGlobals(){
        if (\ini_get('register_globals')){
            $array = array('_SESSION','_POST','_GET','_COOKIE','_REQUEST','_SERVER','_ENV','_FILES');
            foreach ($array as $value) {
                foreach ($GLOBALS[$value] as $key => $var) {
                    if ($var === $GLOBALS[$key]){
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }
}