<?php 
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('APP_DIR', dirname(dirname(__FILE__)));
require_once APP_DIR . DS . "vendor" . DS . "autoload.php";

class Application {
    
    public function run() {
        $dotenv = Dotenv\Dotenv::createImmutable(APP_DIR);
        $dotenv->load();
        require_once APP_DIR . DS . 'controllers'. DS . 'HomeController.php';
        $controllerName = 'HomeController';
        $action = "index";
        $controller = new $controllerName();
        $controller->$action();       
    }
    
}

$app = new Application();
$app->run();