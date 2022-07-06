<?php 
declare(strict_types=1); // I use the strict type mode in True, I active it so I have to respect the type

//Je fais un require de ma class
//require_once('./Class/Cart.php');

//I create a new object from a class
//$cart = new Cart();

//display the value of quantity as public
//var_dump($cart->quantity);
//int(0)


//var_dump($cart);
//object(Cart)#1 (2) { ["quantity"]=> int(0) ["totalPrice"]=> int(50) }

//display the value of quantity as private
// only accessible within the class Cart
//var_dump($cart->quantity);
//Fatal error: 

//var_dump($cart);
//object(Cart)#1 (2) { ["quantity"]=> NULL ["totalPrice"]=> NULL }

////////

require_once('./Class/Calculator.php');
require_once('./Class/FancyCalculator.php');

echo "<br>";
echo Calculator::$nbCalculator;
echo "<br>";

$calculator = new Calculator();
echo $calculator->addition(1, 6);
echo "<br>";
echo $calculator->addition(1, 4);
echo "<br>";
echo $calculator->addition(18, 12);
echo "<br>";
echo $calculator->addition(3, 5);
echo "<br>";
echo $calculator->getTotal();

echo "<br>";
echo "<br>";

$calculator2 = new Calculator();
echo $calculator2->addition(4, 5);
echo "<br>";
echo $calculator2->addition(1, 4);
echo "<br>";
echo $calculator2->addition(18, 9);
echo "<br>";
echo "<br>";
echo $calculator2->getTotal();

echo "<br>";
echo "<br>";

$calculator3 = new Calculator();
var_dump($calculator3);
echo "<br>";
echo $calculator3->addition(1, 2);
echo "<br>";
$calculator3->color="red";
var_dump($calculator3);
echo "<br>";
echo $calculator3->color;
echo "<br>";
echo $calculator3->addition(1, 4);

//$calculator3->total = 500; //
echo $calculator3->getTotal();

echo "<br>";
echo Calculator::$nbCalculator; //echo the number of calculators contained in my class Calculator