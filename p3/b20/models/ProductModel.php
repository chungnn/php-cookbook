<?php 
require_once APP_DIR . DS . "libs" . DS . "Database.php";

class ProductModel {

    public function getProducts($offset, $limit) {
        $sql = 'SELECT * FROM products ORDER BY id DESC LIMIT :limit OFFSET :offset';
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        $return = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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

    public function countProducts() {
        $sql = 'SELECT COUNT(id) as total FROM products';
        $result = Database::getConnection()->query($sql, PDO::FETCH_OBJ)->fetch();
        return (int) $result->total;
    }

}