<?php


class DiscountProduct extends Product
{
  private $discount;

  function __construct($title, $price, $color, $quantity, $discount){
    parent::__construct($title, $price, $color, $quantity);
    $this->discount = $discount;
  }

  function getNewPrice(){
    $newPrice = $this->price * $this->discount;
    echo $newPrice;
  }
}