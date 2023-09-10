<?php
class Dashboard extends Controller{
    public $dashboard_model;
    public function __construct() {
        $this->dashboard_model = $this->model('DashboardModel'); 
    }

    public function index() {
        
    }
}