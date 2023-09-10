<?php
class Admin{
    private $_controller = 'dashboard';
    private $_action = 'index';
    public function __construct() {
        if(isset($_REQUEST['controller'])) {
            $controllerName = strtolower($_REQUEST['controller']);
        }else {
            $controllerName = $this->_controller;
        }

        $actionName = $_REQUEST['action'] ?? $this->_action;
        require_once _DIR_ROOT."/admin/pages/admin-dashboard.php";

        $controllerObject = new $controllerName;
        $controllerObject->$actionName();
    }
}