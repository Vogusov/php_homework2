<?php
include "Product.php";
include "DiscountProduct.php";


$laptop = new Product('Lenovo', '1500', 'red', '5');
$pc = new DiscountProduct('compucter', 1000, 'blue', 100, 0.5);


echo $laptop->getPrice();
echo "<br>";
echo $laptop->getTitle();
echo "<br>";
echo $laptop->addToCart();
echo "<br>";
echo $pc->getTitle();
echo "<br>";
echo $pc->getNewPrice();
echo "<br>";
echo $pc->addToCart();

