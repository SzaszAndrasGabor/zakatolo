<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\CarType;

class ProductController {
    public function list() {
        $carTypeId = $_GET['car_type_id'] ?? null;
        $products = Product::getByCarType($carTypeId);
        $carTypes = CarType::getAll();
        include __DIR__ . '/../Views/product_list.php';
    }
}
?>
