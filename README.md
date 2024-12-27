# Documentation-OOP

1. Goal of the OOP:

Definition: Modeling real-world entities using objects.
Benefits: Reusability, scalability, and maintainability.

-------------------------------------------------------

---Definition: Modeling Real-World Entities Using Objects
OOP is a programming paradigm that models real-world entities and their interactions as objects. Objects are instances of classes, which are blueprints or templates for creating objects. Each object represents a specific instance of a class with its own unique attributes and behaviors.

For example, in a car simulation system, you could have a Car class that defines the attributes (e.g., color, model, speed) and methods (e.g., accelerate, brake) that all cars share. Then, you can create specific instances of the Car class, like a red car or a blue car, each with its own unique properties.

---Benefits:
Reusability: Once a class is written, it can be reused across multiple parts of the program, or even in different projects, which reduces redundancy and development time.
Scalability: OOP makes it easier to scale applications as you can add new classes and objects without disrupting the rest of the system.
Maintainability: Since code is organized into classes and objects, changes to one part of the system can often be made without affecting other parts, making maintenance easier.


-------------------------------------------------------



2. Core OOP Concepts:

---Encapsulation:

Encapsulation is the concept of bundling the data (attributes) and methods (functions) that work on the data into a single unit called a class. It also involves restricting access to some of the object's components using access modifiers (public, private, protected) to safeguard the integrity of the object's state.

Example: A class Car might have a speed property. You don't want other parts of your program to modify this directly, so you use a method to get or set the value of speed.

-------------------------------------------------------

---Abstraction

Abstraction is the concept of hiding complex implementation details and exposing only the essential features of an object. This is done through abstract classes and interfaces, which allow you to define a structure without specifying all the details.

Example: In a payment system, you could have an abstract Payment class with an abstract method processPayment(). Different subclasses (like CreditCardPayment and PayPalPayment) would implement this method differently.


-------------------------------------------------------


---Inheritance


Inheritance allows a new class (called a child class or subclass) to inherit properties and methods from an existing class (called a parent class or superclass). This helps reduce code duplication and promotes code reuse.

Example: A Dog class can inherit from a general Animal class, gaining common properties like name and age, while adding its own behavior (like bark).



-------------------------------------------------------
---Polymorphism


Polymorphism allows objects of different classes to be treated as objects of a common superclass. It also allows subclasses to define methods that are named the same but behave differently.

Example: A Vehicle class might have a startEngine method, but subclasses like Car and Bike can implement this method differently.


-------------------------------------------------------

3. Classes and Objects:

Defining a class and creating an object.
Syntax and examples.

A class is a blueprint for creating objects. A object is an instance of a class.

```php
// a class

 class Car {

    public $brand;
    public $color;
    public $topSpeed;

    public function myCar(){
        echo 'My car is a: ' .$this->brand . ', Its ' .$this->color . ' and its top speed is: ' .$this->topSpeed;
    }


   }

// an object


   $car = new Car();
   $car->brand='SKYLINE R32';
   $car->color= 'Light Gray';
   $car->topSpeed= '340 KM/H';
   $car->myCar();

```   
-------------------------------------------------------

3.1. Properties and Methods
Properties (attributes) are variables that belong to the class, and methods (functions) define the behavior of the class.

Example:

```php
class Mycar {
    // properties

    public $color;
    public $model;

    // method

    public function displayCar() {
        echo " ------- Color: " . $this->color . ", Model: " . $this->model;
    }
    }

    $car = new Mycar();
    $car->color = "blue";
    $car->model = "BMW";
    $car->displayCar();
```
-------------------------------------------------------

3.2. Constructors and Destructors
Constructor (__construct): This is automatically called when an object is created, typically used for initializing object properties.

Destructor (__destruct): This is called when an object is destroyed, often used to clean up resources like closing database connections.

Example:

```php
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
```
-------------------------------------------------------

3.3. Access Modifiers
Access modifiers determine how the properties and methods of a class can be accessed.

public: Accessible from anywhere.

private: Accessible only within the class.

protected: Accessible within the class and by inheriting classes.

Example:

```php
class Car {
    public $color;
    private $engine;

    public function __construct($color) {
        $this->color = $color;
        $this->engine = "V8";
    }

    public function getEngine() {
        return $this->engine;
    }
}
```

4. Inheritance:

Inheritance allows one class to inherit the properties and methods of another.
It helps create a hierarchy and avoids code duplication.

Example: 

```php

class Dacia extends Mycar {
        
        public function displayCar() {
            echo '------ ' .$this->model . ', Ma tomobil ma waaaalou';
        }


    }

    $car = new Dacia();
    $car->model = 'Dacia Logan';
    $car->displayCar();


```

5. Abstract Classes:

An abstract class in PHP is a class that cannot be instantiated directly.
Instead, it serves as a blueprint for other classes that inherit from it. It may contain both:

---Abstract Methods: Methods that do not have a body in the abstract class and must be implemented by subclasses.
---Concrete Methods: Fully implemented methods that can be inherited and used directly by subclasses or overridden.

Example: 

```php

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




```

6. Interfaces:

An interface in PHP is a contract that defines a set of methods a class must implement.
However, unlike abstract classes, interfaces cannot provide any method implementations themselves.
They only define the method signatures (i.e., method name, parameters, and return type).
Any class that implements an interface is required to provide the actual implementation for all the methods declared in the interface.

```php

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
    
   

```



7. Static Methods and Properties:

In PHP, static methods and static properties are special kinds of class members that belong to the class itself rather than to instances of the class.
This means that you can access them without creating an object of the class. 
Static methods and properties are useful for tasks that are related to the class itself rather than to individual objects.

Example: 

```php

class Bike {

public static $speed = 0;

public static function speeding(){

      self::$speed++;

}


}

Bike::speeding();

echo Bike::$speed;


```

8. Namespaces and Autoloading:



A namespace in PHP is a way to encapsulate or group classes, interfaces, functions, and constants logically to avoid name conflicts.
Namespaces are especially useful in large projects, or when using third-party libraries, as they help prevent naming collisions.

Autoloading is the ability for PHP to automatically load class files when a class is instantiated, without needing to explicitly include or require them. This is particularly useful in larger projects because it saves you from having to manually include class files everywhere.

PHP provides an autoloader mechanism that can be customized using the spl_autoload_register function or by using a library like Composer (a dependency manager for PHP).

