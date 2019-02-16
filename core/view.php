<?php
namespace core;

class view{
    protected $file;
    protected $var = [];
    public function display($file){
        $this->file = 'app/view/'.$file.'.html';
        return $this;
    }
    public function assign($name,$value){
        $this->var[$name] = $value;
        return $this;
    }
    public function __toString()
    {
        extract($this->var);
        include $this->file;
        return '';
    }
}