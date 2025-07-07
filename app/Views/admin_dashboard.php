<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Admin - Zakatolo.hu</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h2>Termékek</h2>
    <ul>
        <?php foreach($products as $product): ?>
            <li><?= htmlspecialchars($product['name']) ?> - <?= $product['price'] ?> Ft</li>
        <?php endforeach; ?>
    </ul>
    <h2>Kategóriák</h2>
    <ul>
        <?php foreach($categories as $category): ?>
            <li><?= htmlspecialchars($category['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
