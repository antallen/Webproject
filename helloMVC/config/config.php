<?php
namespace config;

class Config{
    public function show(){
        $file = fopen("../config/.env",'rb');
        while ((! feof($file)) && ($line = fgets($file))){
            $line = trim($line);
            $info = explode('=',$line);
            print $info[0];
        }
    }

}
//print ("Hello");

/** 資料庫連結變數設定 
define('DB_NAME', 'contact');
define('DB_USER', 'hello');
define('DB_PASSWORD', 'hello$1213');
define('DB_HOST', 'localhost');
**/