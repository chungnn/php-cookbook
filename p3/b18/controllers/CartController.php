<?php 

require_once APP_DIR . DS . "controllers" . DS . "BaseController.php";
require_once APP_DIR . DS . "models" . DS . "ProductModel.php";
require_once APP_DIR . DS . "models" . DS . "CartModel.php";
require_once APP_DIR . DS . "models" . DS . "CartDetailModel.php";
require_once APP_DIR . DS . "libs" . DS . "FlashMessage.php";
require_once APP_DIR . DS . "libs" . DS . "Redirector.php";

class CartController extends BaseController{

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

    public function view() {
        $cartModel = new CartModel();
        $cartProducts = $cartModel->getCartWithProductBySession(session_id());
        $cartTotal = 0;
        if(count($cartProducts) > 0) {
            foreach($cartProducts as $p) {
                $cartTotal += $p->price * $p->qty;
            }
        }
        echo $this->view->render('cart', [
            'cartProducts' => $cartProducts,
            'cartTotal' => $cartTotal
        ]);
    }

    public function remove() {
        $productId = $_POST['id'] ?? 0;
        if(!$productId) {
            echo 0;
            exit;
        }
        $cartModel = new CartModel();
        $cart = $cartModel->getCartBySession(session_id());
        if($cart) {
            $cartDetailModel = new CartDetailModel();
            $ret = $cartDetailModel->remove($cart->id, $productId);
            if($ret) {
                echo 1;
                exit;
            }
        }
        echo 0;
    }

}
