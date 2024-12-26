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
   
-------------------------------------------------------

3.1. Properties and Methods
Properties (attributes) are variables that belong to the class, and methods (functions) define the behavior of the class.

Example:

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


-------------------------------------------------------

3.2. Constructors and Destructors
Constructor (__construct): This is automatically called when an object is created, typically used for initializing object properties.

Destructor (__destruct): This is called when an object is destroyed, often used to clean up resources like closing database connections.

Example:


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

-------------------------------------------------------

3.3. Access Modifiers
Access modifiers determine how the properties and methods of a class can be accessed.

public: Accessible from anywhere.

private: Accessible only within the class.

protected: Accessible within the class and by inheriting classes.

Example:


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

4. Inheritance:

Parent and child classes.
Overriding methods.

5. Abstract Classes:

Creating templates for other classes.
abstract methods and their implementation.

6. Interfaces:

Defining a contract for classes.
Implementing multiple interfaces.

7. Static Methods and Properties:

Shared properties and utility methods.

8. Namespaces and Autoloading:

Organizing code with namespaces.
Using Composer’s autoload for managing classes.