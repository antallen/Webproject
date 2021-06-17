<?php

class Model{
    protected $_model;
    protected $_table;

    //initialization
    public function __construct(){
        $this->_model = get_class($this);
        $this->_model = rtrim($this->_model, 'Model');
        $this->_table = strtolower($this->_model);
    }

    //deconstruct
    function __destruct(){

    }
}