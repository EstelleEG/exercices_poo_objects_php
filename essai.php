<?php
//EXEMPLE 1 :
    // class personne {

    //     private $name;
        
    //     public function __construct($name){
    //         $this->Name = $name;
    //     }

    //     public function myName() {
    //         echo "my name is " .$this->Name. '<br/>';
    //     }

    //     public function getName() {
    //         return $this->Name;
    //    }

    //    public function setName($newName) {
    //     $this->Name = $newName;
    //    }
    // }

    // $obj = new Personne('Estelle'); 
    // $obj->myName(); //I display "my name is " .$this->Name;
    // echo $obj->getName(); //I display "Estelle"

    // $obj->setName('Ana');
    // $obj->myName(); //my name is Ana


//EXEMPLE 2 :
    // class Hello {

    //     public static function direBonjour(){
    //         echo 'Bonjour';
    //     }
    // }
    //         //class::method
    //         Hello::direBonjour(); // Bonjour


// //EXEMPLE 3 :
//     class Hello {

//         private static $var = 'hello you';
                
//         public static function direBonjour(){
//             echo self::$var;
//         }
//     }  
        



// //EXEMPLE 4 :
// class Hello {

//     const nb = 2;

//     public static function direBonjour(){
    
//     }
// }  
//     //class::const
//     echo Hello::nb; //2
    
    
    
//EXEMPLE 5:
class Hello {

    public static function direBonjour(){
        echo 'Bonjour exemple 5';
        }
    }

    // $obj = new Hello();
    // $obj->direBonjour();
// or
Hello ::direBonjour();