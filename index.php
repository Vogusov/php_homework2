<?php

abstract class Goods {
  abstract public function getFinalPrice();
}

class DigitalGoods extends Goods {

  public function getFinalPrice() {
    return PieceGoods::getFinalPrice() / 2;
  }
}

class PieceGoods extends Goods {
  private $price;
  private $quantity = 0;

  public function __construct($price) {
    $this->price = $price;
  }


  public function getFinalPrice() {
    return $this->price * $this->quantity;
  }
}

class WeightGoods extends Goods {

  private $price;
  private $weight;

  public function __construct($price, $weight) {
    $this->price = $price;
    $this->weight = $weight;
  }

  public function getFinalPrice() {
    return $this->price * $this->weight;
  }


}
