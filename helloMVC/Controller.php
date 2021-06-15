<?php

class Controller {
    protected $_controller;
    protected $_action;
    protected $_view;

    //initialization
    public function __construct($controller, $action){
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_view = new View($controller, $action);
    }

    // assign variable
    function assign($name, $value){
        $this->_view->assign($name, $value);
    }

    //deconstruct
    function __destruct(){
        $this->_view->render();
    }
}