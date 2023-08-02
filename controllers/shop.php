<?php
class Shop extends Controller{
    public $model_shop;
    public function __construct() {
        $this->model_shop = $this->model('ShopModel');
    }
    public function index() {
        if(isset($_GET['page']) && is_numeric($_GET['page'])) {
            $currentPage = $_GET['page'];
        }else {
            $currentPage = 1;
        }

        $prices = [
            '0 - 10.000.000đ',
            '10.000.000đ - 20.000.000đ',
            '50.000.000đ - 100.000.000đ',
            '100.000.000đ - 250.000.000đ',
            '250.000.000đ+',
        ];

        $categories = $this->model_shop->getCategories();
        $brands = $this->model_shop->getBrands();
        $sizes = $this->model_shop->getSizes();
        $products = $this->model_shop->getProducts($currentPage)[0];
        $pages = (int)$this->model_shop->getProducts($currentPage)[1];

        $this->render('shop', [
            'categories' => $categories,
            'brands' => $brands,
            'prices' => $prices,
            'sizes' => $sizes,
            'products' => $products,
            'pages' => $pages,
            'current_page' => $currentPage
        ]);
    }

    public function detail() {
        $productId = $_GET['id'] ?? null;
        $product = $this->model_shop->getProductById($productId)[0];
        $category = $product['category_name'];
        $relatedProducts = $this->model_shop->getRelatedProducts($category);

        $this->render('shop-details', ['product' => $product,
                                        'relatedProducts' => $relatedProducts]);
    }

    public function show() {
        if(isset($_GET['page']) && is_numeric($_GET['page'])) {
            $currentPage = $_GET['page'];
        }else {
            $currentPage = 1;
        }

        $prices = [
            '0 - 10.000.000đ',
            '10.000.000đ - 20.000.000đ',
            '50.000.000đ - 100.000.000đ',
            '100.000.000đ - 250.000.000đ',
            '250.000.000đ+', 
        ];

        $categories = $this->model_shop->getCategories();
        $brands = $this->model_shop->getBrands();
        $sizes = $this->model_shop->getSizes();

        if(isset($_GET['category'])) {
            $category = $_GET['category'];
            $products = $this->model_shop->showCategory($category, $currentPage)[0];
            $pages = (int)$this->model_shop->showCategory($category, $currentPage)[1];
        }else if(isset($_GET['brand'])) {
            $brand = $_GET['brand'];
            $products = $this->model_shop->showBrand($brand, $currentPage)[0];
            $pages = (int)$this->model_shop->showBrand($brand, $currentPage)[1];
        }else if(isset($_GET['price'])) {
            $price = $_GET['price'];
            $price = str_replace('.', '', $price);
            preg_match_all('/\d+/', $price, $range);
            $products = $this->model_shop->showPrice($range, $currentPage)[0];
            $pages = $this->model_shop->showPrice($range, $currentPage)[1];
        }else if(isset($_POST['option'])) {
            $order = $_POST['option'];
            $products = $this->model_shop->showProductSortedByPrice($order, $currentPage)[0];
            $pages = $this->model_shop->showProductSortedByPrice($order, $currentPage)[1];
        }


        $this->render('shop', [
            'categories' => $categories,
            'brands' => $brands,
            'prices' => $prices,
            'sizes' => $sizes,
            'products' => $products,
            'pages' => $pages,
            'current_page' => $currentPage
        ]);
    }

    public function search() {
        if(isset($_GET['page']) && is_numeric($_GET['page'])) {
            $currentPage = $_GET['page'];
        }else {
            $currentPage = 1;
        }

        $prices = [
            '0 - 10.000.000đ',
            '10.000.000đ - 20.000.000đ',
            '50.000.000đ - 100.000.000đ',
            '100.000.000đ - 250.000.000đ',
            '250.000.000đ+', 
        ];

        if(isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }else {
            $keyword = '';
        }

        $categories = $this->model_shop->getCategories();
        $brands = $this->model_shop->getBrands();
        $sizes = $this->model_shop->getSizes();
        $products = $this->model_shop->showProductsBySearch($keyword, $currentPage)[0];
        $pages = $this->model_shop->showProductsBySearch($keyword, $currentPage)[1];

        $this->render('shop', [
            'categories' => $categories,
            'brands' => $brands,
            'prices' => $prices,
            'sizes' => $sizes,
            'products' => $products,
            'keyword' => $keyword,
            'pages' => $pages,
            'current_page' => $currentPage
        ]);
    }

}