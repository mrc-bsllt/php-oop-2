<?php
  require_once __DIR__."/classes/Phone.php";
  $firstPhone = new Phone("Apple iPhone 12 Pro Max", 1350, "Unieuro", "Apple", "iPhone 12 Pro Max", 100, 50, 1, 0.4)

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
      <h2><?= $firstPhone->product_name; ?></h2>
      <p>Prezzo: <?= $firstPhone->getPrice("&#8364;"); ?></p>

    </div>

  </body>
</html>
