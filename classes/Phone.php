<?php
require_once __DIR__."/Product.php";

class Phone extends Product {
  public $brand;
  public $model;
  private $height;
  private $width;
  private $depth;
  private $weight;
  public $description;

  function __construct($product_name, $price, $seller, $brand, $model, $height, $width, $depth, $weight, $description = "Descrizione non disponibile") {
    parent::__construct($product_name, $price, $seller);
    $this->brand = $brand;
    $this->model = $model;
    $this->height = $height;
    $this->width = $width;
    $this->depth = $depth;
    $this->weight = $weight;
    $this->description = $description;
  }

  public function getDimension() {
    return $this->setDimension();
  }

  private function setDimension() {
    return "(".$this->height.", ".$this->width.", ".$this->depth.") <strong>cm</strong> - ".$this->setWeight();
  }

  private function setWeight() {
    return $this->weight." <strong>Kg</strong>";
  }
}
