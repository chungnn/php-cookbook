<?php 
require_once APP_DIR . DS . "libs" . DS . "Database.php";

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

    public function checkExisted($cartId, $product) {
        $sql = "SELECT * FROM cart_details WHERE cart_id = :cart_id";
        $sql .= " AND product_id = :product_id";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":cart_id", $cartId);
        $stmt->bindParam(":product_id", $product->id);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function incQty($cartId, $product) {
        $sql = "UPDATE cart_details SET qty = qty + 1, price = :price, ";
        $sql .= "updated_at = :updated_at ";
        $sql .= "WHERE cart_id = :cart_id AND product_id = :product_id";
        $updatedAt = date('Y-m-d H:i:s');
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":cart_id", $cartId);
        $stmt->bindParam(":product_id", $product->id);
        $stmt->bindParam(":price", $product->price);
        $stmt->bindParam(":updated_at", $updatedAt);
        return $stmt->execute();
    }

    public function addOrInc($cartId, $product) {
        $cartDetail = $this->checkExisted($cartId, $product);
        if($cartDetail) {
            return $this->incQty($cartId, $product);
        } else {
            return $this->insert($cartId, $product);
        }

    }
    

    public function remove($cartId, $productId) {
        $sql = "DELETE FROM cart_details WHERE ";
        $sql .= "cart_id = :cart_id AND product_id = :product_id ";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(":cart_id", $cartId);
        $stmt->bindParam(":product_id", $productId);
        return $stmt->execute();
    }

}

