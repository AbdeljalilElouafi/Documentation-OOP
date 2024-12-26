<?php

   class Car {

    public $brand;
    public $color;
    public $topSpeed;

    public function myCar(){
        echo 'My car is a: ' .$this->brand . ', Its ' .$this->color . ' and its top speed is: ' .$this->topSpeed;
    }


   }

   $car = new Car();
   $car->brand='SKYLINE R32';
   $car->color= 'Light Gray';
   $car->topSpeed= '340 KM/H';
   $car->myCar();
   

   class Mycar {
    public $color;
    public $model;

    public function displayCar() {
        echo " ------- Color: " . $this->color . ", Model: " . $this->model;
    }
    }

    $car = new Mycar();
    $car->color = "blue";
    $car->model = "BMW";
    $car->displayCar();


    class Eye {
        public $color;
    
        public function __construct($color) {
            $this->color = $color;
        }
    
        public function __destruct() {
            echo "------- Object of color {$this->color} is being destroyed.";
        }
    }
    
    $eye = new Eye("green"); 


    // class Car {
    //     public $color;
    //     private $engine;
    
    //     public function __construct($color) {
    //         $this->color = $color;
    //         $this->engine = "V8";
    //     }
    
    //     public function getEngine() {
    //         return $this->engine;
    //     }
    // }



?>


