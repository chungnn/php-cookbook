<?php 
use Jenssegers\Blade\Blade;

require_once APP_DIR . DS . "models" . DS . "ProductModel.php";

class HomeController {

    public function index() {
        $model = new ProductModel();
        $products = $model->getProducts();
        $blade = new Blade(APP_DIR  . DS . 'views', APP_DIR  . DS . 'cache');
        echo $blade->render('home', ['products' => $products]);
    }

}