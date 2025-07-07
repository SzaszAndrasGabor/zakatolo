<?php
namespace App\Controllers;
use App\Models\Cart;

class CartController {
    public function index() {
        session_start();
        $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        include __DIR__ . '/../Views/cart.php';
    }

    public function add() {
        session_start();
        $productId = $_POST['product_id'] ?? null;
        $quantity = $_POST['quantity'] ?? 1;

        if ($productId) {
            Cart::add($productId, $quantity);
            header("Location: /cart");
            exit;
        }
    }

    public function remove() {
        session_start();
        $productId = $_GET['product_id'] ?? null;

        if ($productId) {
            Cart::remove($productId);
            header("Location: /cart");
            exit;
        }
    }
}
?>
