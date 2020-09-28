<?php

abstract class Product {

  const TAX = 0.13;      // налог с продаж
  const OVERPRICE = 0.3; // наценка на товар (уже включена в цену)

  abstract public function getPrice();

  abstract public function getFinalPrice();

  public function countProfit() {
    return $this->getFinalPrice() * (1 - self::TAX) * self::OVERPRICE;
  }

}


class DigitalProduct extends Product {

  const PRICE = 1000;
  private $quantity;    // кол-во товара

  public function __construct(int $quantity) {
    $this->quantity = $quantity;
  }

  public function getPrice() {
    return self::PRICE;
  }

  public function getQuantity() {
    return $this->quantity;
  }

  public function getFinalPrice() {
    return self::PRICE * $this->quantity;
  }

}

class PieceProduct extends DigitalProduct {

  public function getPrice() {
    return parent::PRICE * 2;
  }

  public function getFinalPrice() {
    return $this->getPrice() * $this->getQuantity();
  }


}

class WeightProduct extends Product {

  private $price;
  private $amount;

  public function __construct(float $price, float $amount) {
    $this->price = $price;
    $this->amount = $amount;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getFinalPrice() {
    return $this->price * $this->amount;
  }
}

$pr = new DigitalProduct(5);
echo 'Final profit of digital product is: ' . $pr->countProfit() . PHP_EOL;

$pr = new PieceProduct(5);
echo 'Final profit of piece product is: ' . $pr->countProfit() . PHP_EOL;

$pr = new WeightProduct(1000, 5);
echo 'Final profit of weight product is: ' . $pr->countProfit() . PHP_EOL;
