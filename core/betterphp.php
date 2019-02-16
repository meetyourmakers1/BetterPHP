<?php
namespace core;

class betterphp{
    public static function run(){
        session_start();
        self::parseUrl();
    }
    //解析路由
    public static function parseUrl(){
        if(isset($_GET['c'])){
            $uri = explode('/',$_GET['c']);
            $class = '\app\controller\\'.$uri[0];
            $action = $uri[1];
        }else{
            $class = '\app\controller\index';
            $action = 'index';
        }
        echo (new $class())->$action();
    }
}