<?php
namespace App\Models;
global $pdo;

class CarType {
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM car_types");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>
