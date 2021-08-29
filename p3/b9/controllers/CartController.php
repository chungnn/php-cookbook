<?php 
use Jenssegers\Blade\Blade;

require_once APP_DIR . DS . "models" . DS . "ProductModel.php";

class CartController {

    public function add() {
        $id = $_GET['id'] ?? 0;
        if(!$id) {
            return;
        }
        $model = new ProductModel();
        $product = $model->getProduct($id);
        var_dump($product);
        die;
    }

}