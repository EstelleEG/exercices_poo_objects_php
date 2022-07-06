<?php 

require_once('./Class/Cart1.php');

$cart = new Cart(0, 100); //I store in var an instance of an object

//$cart->setTotalPrice(50); 
$cart->discount(5);

//var_dump($cart->quantity); 
var_dump($cart->getTotalPrice());
// float(95)

