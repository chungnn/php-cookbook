<?php 
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('APP_DIR', dirname(dirname(__FILE__)));
require_once APP_DIR . DS . "vendor" . DS . "autoload.php";

class Application {
    
    public function run() {
        $dotenv = Dotenv\Dotenv::createImmutable(APP_DIR);
        $dotenv->load();
        $controller = strtolower($_GET['c'] ?? 'home');
        $action = strtolower($_GET['a'] ?? 'index');
        $controllerName = ucfirst($controller) . 'Controller';
        $load = APP_DIR . DS . 'controllers'. DS . $controllerName .'.php';
        require_once $load;
        $controller = new $controllerName();
        $controller->$action();       
    }
    
}

$app = new Application();
$app->run();