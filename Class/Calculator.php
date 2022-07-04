<?php 


class Calculator {

    public static $pi = 3.14159;
    public static $nbCalculator = 0;
    // public function addition($a, $b){
    //     $result = $a + $b;
    //     return $result;
    // }

    private $total = 0; //propriety, var that belongs to an object //setting it up in private, I deny the access from the outside

    public function __construct()//called when we create the object with 'new'
    {
        self::$nbCalculator++; // or :  calculator::$nbCalculator++;

    public function addition(int $a, int $b) {
        $result = $a + $b;
        $this->total += $result; //i add the result to the total of the current object 
        return $result;
    }

    public function getTotal() { //method is public so we can access it from outside the class //we can ask for the total but we cant change the value of the total
        return $this->total; //i return the total of the current object 
    }


}

?>