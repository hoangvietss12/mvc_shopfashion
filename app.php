<?php
    class App{
        private $_controller = 'home';
        private $_action = 'index';
  
        function __construct(){
                if(isset($_REQUEST['controller'])) {
                    $controllerName = strtolower($_REQUEST['controller']);
                }else {
                    $controllerName = $this->_controller;
                }
    
            $actionName = $_REQUEST['action'] ?? $this->_action;
            require_once "./controllers/$controllerName.php";


            $controllerObject = new $controllerName;

            $controllerObject->$actionName();
            
        }

        public function loadError($name='404', $data=[]) {
            extract($data);
            require_once 'errors/'.$name.'.php';
        }

}