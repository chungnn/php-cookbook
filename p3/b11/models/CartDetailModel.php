<?php 
require_once APP_DIR . DS . "libs" . DS . "database.php";

class CartDetailModel {

    public function insert($cartId, $product) {
        $sql = "INSERT INTO cart_details (id, cart_id, product_id, price, qty, created_at) VALUES ";
        $sql .= "(NULL, :cart_id, :product_id, :price, 1, :created_at)";
        $createdAt = date('Y-m-d H:i:s');
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":cart_id", $cartId);
        $stmt->bindParam(":product_id", $product->id);
        $stmt->bindParam(":price", $product->price);
        $stmt->bindParam(":created_at", $createdAt);
        $stmt->execute();
        return Database::getConnection()->lastInsertId();
    }

}