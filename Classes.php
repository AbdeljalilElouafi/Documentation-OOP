<?php

    // spl_autoload_register(function ($class) {
    //     include 'src/' . str_replace('\\', '/', $class) . '.php';
    // });

    // $Truck = new Vehicles\Truck();  
    // $Truck->drive(); 

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


    class Dacia extends Mycar {
        
        public function displayCar() {
            echo '------ ' .$this->model . ', Ma tomobil ma waaaalou';
        }


    }

    $car = new Dacia();
    $car->model = 'Dacia Logan';
    $car->displayCar();


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



    // ------------ABSTRACTION----------------

    abstract class Animal {

        abstract public function move();

        public function sleep(){
            echo 'animal is sleeping <br>';
        }


    }

    class Wolf extends Animal {

        public function move(){
            echo '<br>Wolf is running <br>';
        }

    }
    
    class Bear extends Animal {

        public function move(){
            echo 'Bear is walking <br>';
        }

    }


    $wolf = new Wolf();
    $wolf->move();
    $wolf->sleep();
    
    
    $bear = new Bear();
    $bear->move();
    $bear->sleep();


    abstract class BankAccount {
        protected $balance;
        protected $accountOwner;

        public function __construct($balance , $name ){
            $this->balance = $balance;
            $this->accountOwner = $name;
        }

        public function deposit($amount){

            if($amount<=0){
                echo 'Amount must be bigger than 0 <br>';
            }

            $this->balance +=$amount;
            echo 'new balance is: ' .$this->balance;

        }

        abstract function withdraw($amount);


    }



    //-----------INTERFACE-------------
    
    interface Earth{
        public function turnOnSelf();
        public function turnOnSun();
        public function travellingInUnivers();
    }
    
    
    class Galaxy implements Earth {
        public function turnOnSelf(){
            echo '<br> 24 hours tour';
        }
        public function turnOnSun(){
            echo '<br> 365 days tour';
        }
        public function travellingInUnivers(){
            echo '<br> travelling since the beginning!';
        }
    }
    
    $earth= new Galaxy();
    $earth->turnOnSelf();
    $earth->turnOnSun();
    $earth->travellingInUnivers();
    
    
    //-----------STATIC METHODS-------------

    
    class Bike {

        public static $speed = 0;
        
        public static function speeding(){
        
              self::$speed++;
        
        }
        
        
        }
        
        Bike::speeding();
        Bike::speeding();
        Bike::speeding();
        Bike::speeding();
        
        echo '<br>';
        echo Bike::$speed;
        
   


?>


