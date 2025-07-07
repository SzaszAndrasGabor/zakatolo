<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';

use App\Controllers\HomeController;

$controller = new HomeController();
$controller->index();
?>
