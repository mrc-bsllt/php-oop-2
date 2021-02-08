<?php
  require_once __DIR__."/classes/Phone.php";
  require_once __DIR__."/classes/Book.php";

  $firstPhone = new Phone("Apple iPhone 12 Pro Max - Nero", 1350, "Unieuro", "Apple", "iPhone 12 Pro Max", 100, 50, 1, 0.4);
  $firstBook = new Book("Libro - Blu quasi trasparente", 20, "Mondadori", "https://www.atmospherelibri.it/wp/wp-content/uploads/2019/10/9788865643198.jpg", "Blu quasi trasparente", "Murakami Ryu", "italiano", 1976);
  $secondBook = new Book("Libro - La tristezza ha il sonno leggero", 15, "Mondadori", "https://images.eprice.it/nobrand/0/Lightbox/769/206593769/8CB49F2B-870B-45A4-841D-BD1829A11385.jpg", "La tristezza ha il sonno leggero", "Lorenzo Marone", "italiano", 2016);

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
    <div class="products">

      <div class="product">
        <img src="<?= $firstBook->image; ?>" alt="<?= $firstBook->product_name; ?>">
        <h2><?= $firstBook->product_name; ?></h2>
        <div class="plot">
          <h4>Trama:</h4>
          <p><?= $firstBook->plot; ?></p>
        </div>
        <p>Autore: <?= $firstBook->getBookInfo(); ?></p>
        <p>Lingua: <?= $firstBook->language; ?></p>
        <small>Casa editrice: <strong><?= $firstBook->seller; ?></strong></small>
        <small>Prezzo: <strong><?= $firstBook->getPrice("&#8364;"); ?></strong></small>
      </div>

      <div class="product">
        <img src="<?= $secondBook->image; ?>" alt="<?= $secondBook->product_name; ?>">
        <h2><?= $secondBook->product_name; ?></h2>
        <div class="plot">
          <h4>Trama:</h4>
          <p><?= $secondBook->plot; ?></p>
        </div>
        <p>Autore: <?= $secondBook->getBookInfo(); ?></p>
        <p>Lingua: <?= $secondBook->language; ?></p>
        <small>Casa editrice: <strong><?= $secondBook->seller; ?></strong></small>
        <small>Prezzo: <strong><?= $secondBook->getPrice("&#8364;"); ?></strong></small>
      </div>

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

    </div>

  </body>
</html>
