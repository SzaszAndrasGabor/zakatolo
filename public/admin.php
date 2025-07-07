<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../app/Controllers/AdminController.php';

use App\Controllers\AdminController;

$controller = new AdminController();
$controller->dashboard();
?>
