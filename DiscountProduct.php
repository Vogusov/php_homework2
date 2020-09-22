<?php


class DiscountProduct extends Product
{
  private $discount;

  function __construct($title, $price, $color, $quantity, $discount){
    $this->title = $title;
    $this->price = $price;
    $this->color = $color;
    $this->quantity = $quantity;
    $this->discount = $discount;
  }

  function getNewPrice(){
    $newPrice = $this->price * $this->discount;
    echo $newPrice;
  }
}