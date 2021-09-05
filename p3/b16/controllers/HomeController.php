<?php 

require_once APP_DIR . DS . "controllers" . DS . "BaseController.php";
require_once APP_DIR . DS . "models" . DS . "ProductModel.php";
require_once APP_DIR . DS . "models" . DS . "CartModel.php";
require_once APP_DIR . DS . "libs" . DS . "FlashMessage.php";


class HomeController extends BaseController {

    public function index() {
        $model = new ProductModel();
        $products = $model->getProducts();
        $cartModel = new CartModel();
        $cartProducts = $cartModel->getCartWithProductBySession(session_id());
        $cartTotal = 0;
        if(count($cartProducts) > 0) {
            foreach($cartProducts as $p) {
                $cartTotal += $p->price * $p->qty;
            }
        }
        $flashMessages = FlashMessage::getMessages();
        echo $this->view->render('home', [
            'products' => $products, 
            'cartProducts' => $cartProducts,
            'flashMessages' => $flashMessages,
            'cartTotal' => $cartTotal
        ]);
    }

}
