<?php 
require_once APP_DIR . DS . "libs" . DS . "database.php";

class CartModel {

    public function getCartBySession($sessionId) {
        $sql = "SELECT * FROM cart WHERE session_id = :sess_id";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":sess_id", $sessionId);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function insertCart($sessionId) {
        $sql = "INSERT INTO cart(id, session_id, cust_id, created_at) VALUES ";
        $sql .= "(NULL, :sess_id, 0, :created_at)";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":sess_id", $sessionId);
        $createdAt = date('Y-m-d H:i:s');
        $stmt->bindParam(":created_at", $createdAt);
        $stmt->execute();
        return Database::getConnection()->lastInsertId();
    }

    public function createOrGetCart($sessionId) {
        $cart = $this->getCartBySession($sessionId);
        if($cart) {
            return $cart->id;
        }
        return $this->insertCart($sessionId);
    }

}