<?php
  require_once __DIR__."/Product.php";

  class Book extends Product {
    public $title;
    private $author;
    public $plot;
    public $language;
    private $year;

    function __construct($product_name, $price, $seller, $image = "https://www.associazionejam.it/wp-content/uploads/2017/04/non-disponibile-300x300.png", $title, $author, $language, $year, $rate = 0, $plot = "Trama non disponibile") {
      parent::__construct($product_name, $price, $seller, $image, $rate);
      $this->title = $title;
      $this->author = $author;
      $this->plot = $plot;
      $this->language = $language;
      $this->year = $year;
    }

    public function getBookInfo() {
      return "<strong>".$this->author."</strong> (".$this->year.")";
    }
  }
