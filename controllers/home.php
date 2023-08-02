<?php
class Home extends Controller{
    public $model_home;
    public function __construct() {
        $this->model_home = $this->model('HomeModel');
    }
    public function index() {
        $productsTagBest = $this->model_home->getProductsByTagsBest();
        $productsTagNew = $this->model_home->getProductsByTagsNew();
        $productsTagSale = $this->model_home->getProductsByTagsSale();

        $this->render('home', ['productsTagBest' => $productsTagBest,
                                'productsTagNew' => $productsTagNew,
                                'productsTagSale' => $productsTagSale]);
    }

    public function signin() {
        $this->render('clients/sign-in');
    }

    public function signup() {
        $this->render('clients/sign-up');
    }

    public function logout() {
        session_unset();

        session_destroy();

        $previousPage = $_SERVER['HTTP_REFERER'];
        header("Location: $previousPage");
        exit();
    }

}