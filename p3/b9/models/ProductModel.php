<?php 
require_once APP_DIR . DS . "libs" . DS . "database.php";

class ProductModel {

    public function getProducts() {
        $sql = 'SELECT * FROM products ORDER BY id DESC';
        $result = Database::getConnection()->query($sql, PDO::FETCH_ASSOC);
        $return = [];
        foreach ( $result as $row) {
            $return[] = $row;
        }
        return $return;
    }

    public function getProduct($id) {
        var_dump($id);
    }

}