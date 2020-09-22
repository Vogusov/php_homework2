<?php


class Product
{
  protected $title;
  protected $price;
  protected $color;
  protected $quantity;
  private $inCart = false;

  function __construct($title, $price, $color, $quantity)
  {
    $this->title = $title;
    $this->price = $price;
    $this->color = $color;
    $this->quantity = $quantity;

  }


  public function addToCart()
  {
    $this->inCart = true;
    echo "added to cart<br>";
  }

  public function removeFromCart()
  {
    $this->inCart = false;
    echo "removed from cart<br>";
  }

  public function getPrice(){
    echo "This price: $this->price.";
  }
  public function getTitle(){
    echo "This title: $this->title.";
  }
  }