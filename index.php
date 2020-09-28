<?php
//
//abstract class Product {
//  const TAX = 0.13;
//  abstract public function getFinalPrice();
//  abstract public function countProfit();
//}
//
//class DigitalProduct extends Product {
//  const PRICE = 1000;
//  public function getFinalPrice() {
//    return PieceProduct::getFinalPrice() / 2;
//  }
//
//  public function countProfit() {
//    // TODO: Implement countProfit() method.
//  }
//}
//
//class PieceProduct extends Product {
//  private $price;
//  private $quantity = 1;
//
//  public function __construct($price) {
//    $this->price = $price;
//
//  }
//
//
//  public function getFinalPrice() {
//    return $this->price * $this->quantity;
//  }
//}
//
//class WeightProduct extends Product {
//
//  private $price;
//  private $weight;
//
//  public function __construct($price, $weight) {
//    $this->price = $price;
//    $this->weight = $weight;
//  }
//
//  public function getFinalPrice() {
//    return $this->price * $this->weight;
//  }
//
//
//}
