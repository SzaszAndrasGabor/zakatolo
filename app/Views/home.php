<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Zakatolo.hu - Autófelszerelés Webshop</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>Kiemelt termékek</h1>
    <div class="products">
        <?php foreach($products as $product): ?>
            <div class="product">
                <h3><?= htmlspecialchars($product['name']) ?></h3>
                <p><?= htmlspecialchars($product['description']) ?></p>
                <strong><?= $product['price'] ?> Ft</strong>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
