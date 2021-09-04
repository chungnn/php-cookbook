<?php 
use Jenssegers\Blade\Blade;

require_once APP_DIR . DS . "models" . DS . "ProductModel.php";
require_once APP_DIR . DS . "models" . DS . "CartModel.php";
require_once APP_DIR . DS . "libs" . DS . "FlashMessage.php";

class HomeController {

    public function index() {
        $model = new ProductModel();
        $products = $model->getProducts();
        $blade = new Blade(APP_DIR  . DS . 'views', APP_DIR  . DS . 'cache');
        $cartModel = new CartModel();
        $cartProducts = $cartModel->getCartWithProductBySession(session_id());
        $flashMessages = FlashMessage::getMessages();
        echo $blade->render('home', [
            'products' => $products, 
            'cartProducts' => $cartProducts,
            'flashMessages' => $flashMessages
        ]);
    }

}