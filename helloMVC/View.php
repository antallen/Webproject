<?php

class View {
    protected $variables = array();
    protected $_controller;
    protected $_action;

    public function __construct($controller, $action){
        $this->_controller = $controller;
        $this->_action = $action;
    }

    //assign variable
    function assign($name, $value){
        $this->variables[$name] = $value;
    }

    //show html
    function render(){
        extract($this->variables);
        $defaultHeader = APP_PATH . 'app/Views/header.php';
        $defaultFooter = APP_PATH . 'app/Views/footer.php';
        $controllerHeader = APP_PATH . 'app/Views/' . $this->_controller . '/header.php';
        $controllerFooter = APP_PATH . 'app/Views/' . $this->_controller . '/footer.php';

        if (file_exists($controllerHeader)){
            include ($controllerHeader);
        } else {
            include ($defaultHeader);
        }

        //web page content
        include (APP_PATH . 'app/Views/' . $this->_controller . '/' . $this->_action . '.php');

        //footer page
        if (file_exists($controllerFooter)){
            include ($controllerFooter);
        } else {
            include ($defaultFooter);
        }
    }
}