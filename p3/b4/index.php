<?php
require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_SERVER["DB_HOST"];
$username = $_SERVER["DB_USERNAME"];
$password = $_SERVER["DB_PASSWORD"];
$dbname = $_SERVER["DB_NAME"];


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec("SET NAMES utf8");
      
    $sql = 'SELECT * FROM products ORDER BY id DESC';
    $result = $conn->query($sql, PDO::FETCH_ASSOC);
    var_dump($result);
    echo "<pre>";
    foreach ( $result as $row) {
        var_dump($row);
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

