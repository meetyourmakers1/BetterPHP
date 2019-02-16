<?php
namespace app\controller;

use core\view;
class index{
    protected $view;
    public function __construct(){
        $this->view = new view();
    }
    public function index(){
        return $this->view->display('index')->assign('version','1.0.0');
    }
}