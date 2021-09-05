<?php 
use Jenssegers\Blade\Blade;

require_once APP_DIR . DS . "models" . DS . "ProductModel.php";
require_once APP_DIR . DS . "models" . DS . "CartModel.php";
require_once APP_DIR . DS . "models" . DS . "CartDetailModel.php";
require_once APP_DIR . DS . "libs" . DS . "FlashMessage.php";
require_once APP_DIR . DS . "libs" . DS . "Redirector.php";

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
        $cartDetailModel = new CartDetailModel();
        $result = $cartDetailModel->addOrInc($cartId, $product);
        if($result) {
            FlashMessage::register(FlashMessage::TYPE_SUCCESS, 'Thêm sản phẩm vào giỏ hàng thành công');
        } else {
            FlashMessage::register(FlashMessage::TYPE_ERROR, 'Thêm vào giỏ hàng bị lỗi');
        }
        Redirector::redirectTo('index.php');
    }

}