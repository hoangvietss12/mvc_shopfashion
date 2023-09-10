<?php 
class News extends Controller{
    public $model_news;
    public function __construct() {
        $this->model_news = $this->model('ShopModel');
    }

    public function index(){
        $this->render('blog-details');
    }
}