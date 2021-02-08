<?php

class Product {
  public $product_name;
  protected $price;
  public $seller;
  public $image;
  public $rate;

  function __construct($product_name, $price, $seller, $image = "https://www.associazionejam.it/wp-content/uploads/2017/04/non-disponibile-300x300.png", $rate = 0) {
    $this->product_name = $product_name;
    $this->price = $price;
    $this->seller = $seller;
    $this->image = $image;
    $this->rate = $rate;
  }

  public function getPrice($currency) {
    return $this->price." ".$currency;
  }
}
