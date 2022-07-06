<?php 

class Cart
{
    //attributs that represent a cart
    public int $quantity; //property is quantity
    public float $totalPrice;



    //always public cos it's about the contruction
    //
    public function __construct(int $quantity, float $totalPrice) 
    {
        //$this fait ref a notre current class 'Cart'
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    public function getTotalPrice(): float 
    {
        return $this->totalPrice;
    }
   

    public function setTotalPrice(float $price): void //returns nothing cos it updates a value
    {
        $this->totalPrice = $price;
    }

    public function discount(float $discount): void
    {
        $this->totalPrice -= $this->totalPrice * ($discount / 100); //totalPrice - 5%
    }


}

//private function accessible only within the class Cart
//public function accessible even outside the class Cart
//'?' means 'or null/