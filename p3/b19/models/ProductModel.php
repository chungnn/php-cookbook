<?php 
require_once APP_DIR . DS . "libs" . DS . "Database.php";

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
        $sql = "SELECT id, price FROM products WHERE id = :id";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchObject();
    }

}