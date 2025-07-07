<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Termékek szűrése - Zakatolo.hu</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>Termékek szűrése autótípus szerint</h1>

    <form method="GET">
        <label for="car_type_id">Válassz autótípust:</label>
        <select name="car_type_id" id="car_type_id">
            <option value="">Összes</option>
            <?php foreach($carTypes as $carType): ?>
                <option value="<?= $carType['id'] ?>"><?= htmlspecialchars($carType['name']) ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Szűrés</button>
    </form>

    <h2>Találatok:</h2>
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
