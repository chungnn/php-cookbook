<?php 
use Jenssegers\Blade\Blade;

require_once APP_DIR . DS . "models" . DS . "ProductModel.php";
require_once APP_DIR . DS . "models" . DS . "CartModel.php";

class CartController {

    public function add() {
        $id = $_GET['id'] ?? 0;
        if(!$id) {
            return;
        }
        $model = new ProductModel();
        $product = $model->getProduct($id);
        $cartModel = new CartModel();
        $cartId = $cartModel->createOrGetCart(session_id());
        var_dump($cartId);
        
    }

}