<?php
namespace App\Controllers;
use App\Models\Product;

class HomeController {
    public function index() {
        $products = Product::getFeatured();
        include __DIR__ . '/../Views/home.php';
    }
}
?>
