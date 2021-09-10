<?php 

require_once APP_DIR . DS . "controllers" . DS . "BaseController.php";
require_once APP_DIR . DS . "models" . DS . "ProductModel.php";
require_once APP_DIR . DS . "models" . DS . "CartModel.php";
require_once APP_DIR . DS . "libs" . DS . "FlashMessage.php";

define('PER_PAGE', 2);


class HomeController extends BaseController {

    public function index() {
        $model = new ProductModel();
        $total = $model->countProducts();
        $currentPage = $_GET['page'] ?? 1;
        $totalPage = ceil($total / PER_PAGE);
        $offset = ($currentPage - 1) * PER_PAGE;
        $products = $model->getProducts($offset, PER_PAGE);
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
            'cartTotal' => $cartTotal,
            'currentPage' => $currentPage,
            'totalPage' => $totalPage
        ]);
    }

}
