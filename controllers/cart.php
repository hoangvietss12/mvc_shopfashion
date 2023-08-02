<?php
class Cart extends Controller{
    public $model_cart;
    public $cookie_cart;
    private $cartItems = [];
    public function __construct() {
        $this->cookie_cart = new Cookie();
        $this->model_cart = $this->model('CartModel');
    }

    public function index() {
        $userId = $_SESSION['user_id'] ?? null;
        $total = 0;
        $products = $this->getCartItems($userId);

        foreach($products as $product) {
            $total+= $product['product_price']*$product['qty'];
        }

        $this->render('shopping-cart', ['products' => $products,
                                        'total' => $total]);
    }

    // Handle cart
    public function addToCart($productId, $product, $userId) {
        $cookieName = 'cart_'.$userId;
        $existingCart = $this->cookie_cart->getCookie($cookieName);
    
        $cart = $existingCart ? json_decode($existingCart, true) : [];
        

        if(isset($cart[$productId])) {
            $unserializeProduct = unserialize($cart[$productId]);
            $unserializeProduct['qty'] = $unserializeProduct['qty']+1;

            $serializedProduct = serialize($unserializeProduct);
            $cart[$productId] = $serializedProduct;
        }else {
            $product['qty'] = 1;
            $serializedProduct = serialize($product);
            $cart[$productId] = $serializedProduct;
        }
        
        $this->cookie_cart->setCookie($cookieName, json_encode($cart));
    }
    

    public function removeFromCart($productId, $userId) {
        $cookieName = 'cart_'.$userId;
        $existingCart = $this->cookie_cart->getCookie($cookieName);

        if($existingCart) {
            $cart = json_decode($existingCart, true);

            if(isset($cart[$productId])) {
                unset($cart[$productId]);
                $this->cookie_cart->setCookie($cookieName, json_encode($cart));
            }
        }

    }

    public function getCartItems($userId) {
        $cookieName = 'cart_'.$userId;

        if(isset($_COOKIE[$cookieName])) {
            $cartItemName = $_COOKIE[$cookieName];
            $cartItem = json_decode($cartItemName, true);
            foreach($cartItem as $key => $item) {
                $this->cartItems[$key] = unserialize($item); 
            }
        }

        return $this->cartItems;
    }

    // Store cart items
    public function store() {
        $productId = $_GET['id'] ?? null;
        $userId = $_SESSION['user_id'] ?? null;
        $product = $this->model_cart->getProductById($productId);
        $this->addToCart($productId, $product, $userId);
        
        header('Location: '._WEB_ROOT.'/index.php?controller=cart');
    }

    public function remove() {
        $productId = $_GET['id'] ?? null;
        $userId = $_SESSION['user_id'] ?? null;
        $this->removeFromCart($productId, $userId);
        
        header('Location: '._WEB_ROOT.'/index.php?controller=cart');
    }
}