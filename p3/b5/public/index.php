<?php 
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('APP_DIR', dirname(dirname(__FILE__)));

require_once APP_DIR . DS . "vendor" . DS . "autoload.php";
require_once APP_DIR . DS . "libs" . DS . "database.php";


class Application {
    
    public function run() {
        $dotenv = Dotenv\Dotenv::createImmutable(APP_DIR);
        $dotenv->load();
        $db = new Database();
        $sql = 'SELECT * FROM products ORDER BY id DESC';
        $result = $db->getConnection()->query($sql, PDO::FETCH_ASSOC);
        echo "<pre>";
        foreach ( $result as $row) {
            var_dump($row);
        }
        
    }
    
}

$app = new Application();
$app->run();