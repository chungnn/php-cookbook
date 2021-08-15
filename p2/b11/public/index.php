<?php 

define('DS', DIRECTORY_SEPARATOR);
define('APP_DIR', dirname(dirname(__FILE__))); // chú ý dòng này có thay đổi nhé.

class Application {
    
    public function run() {
        require_once APP_DIR . DS . 'controllers'. DS . 'student.php';
        $controller = new StudentController();
        $action = $_GET['a'] ?? 'index';
        switch($action) {
            case 'register':
                $controller->add();
                break;
            case 'index':
            default:
                $controller->index();
        }
    }
    
}

$app = new Application();
$app->run();