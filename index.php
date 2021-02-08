<?php
  require_once __DIR__."/classes/Phone.php";
  $firstPhone = new Phone("Apple iPhone 12 Pro Max - Nero", 1350, "Unieuro", "Apple", "iPhone 12 Pro Max", 100, 50, 1, 0.4)

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-2</title>
  </head>
  <body>
    <h1>Prodotti</h1>
    <div class="product">
      <img src="<?= $firstPhone->image; ?>" alt="<?= $firstPhone->product_name; ?>">
      <h2><?= $firstPhone->product_name; ?></h2>
      <p><?= $firstPhone->description; ?></p>
      <p>Marca: <?= $firstPhone->brand." - ".$firstPhone->model ?></p>
      <p>
        Dimensioni prodotto: <br>
        <?= $firstPhone->getDimension() ?>
      </p>
      <small>Rivenditore: <strong><?= $firstPhone->seller; ?></strong></small>
      <small>Prezzo: <strong><?= $firstPhone->getPrice("&#8364;"); ?></strong></small>

    </div>

  </body>
</html>
