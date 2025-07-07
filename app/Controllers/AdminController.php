<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;

class AdminController {
    public function dashboard() {
        $products = Product::getAll();
        $categories = Category::getAll();
        include __DIR__ . '/../Views/admin_dashboard.php';
    }
}
?>
