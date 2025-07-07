<?php
namespace App\Models;
global $pdo;

class Product {
    public static function getFeatured() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM products WHERE featured = 1 LIMIT 8");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>
