<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kosár - Zakatolo.hu</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>Kosár tartalma</h1>
    <?php if (empty($cartItems)): ?>
        <p>A kosár üres.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($cartItems as $productId => $qty): ?>
                <li>Termék ID: <?= $productId ?> - Mennyiség: <?= $qty ?>
                    <a href="/cart/remove?product_id=<?= $productId ?>">Eltávolítás</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="/">Vissza a főoldalra</a>
</body>
</html>
