<?php

// What is the difference between an object and a class?

// A class is a template for an object. Think of it like a cookie cutter, it will allow you to use the cookie cutter class to create many cookie objects that all look alike.

// Let's create a simple class - for a car

// class Car {}

// // Currently our car does nothing and there are no cars, we need to create a *new* car

// $car = new Car();
// var_dump($car);





// // A Class can have properties attached to it
// class Car
// {
//     public string $make;
// }

// $car = new Car();
// $car->make = 'Ford';
// var_dump($car);





// A class can also have functions on it, called methods
// class Car
// {
//     public string $make;
//     public bool $driving = false;
//     public function drive()
//     {
//         $this->driving = true;
//     }
// }

// $car = new Car();
// $car->make = 'Ford';
// var_dump($car);
// $car->drive();
// var_dump($car);








// Classes have different levels of access on methods and attributes.
// Meaning that you can access them inside and outside of the class:
// class Car
// {
//     protected string $make;
// }
// $car = new Car();
// // $car->make = 'Ford'; // This fails because the attribute is protected, meaning outside of the class it cannot be accessed.
// var_dump($car);




// We access protected or private attributes usually using setters and getters
// class Car
// {
//     private string $make;
//     public function setMake(string $make)
//     {
//         $this->make = $make;
//     }
//     public function getMake()
//     {
//         return $this->make;
//     }
// }










// The more complicate the class, the more we have to think about the design of the class also.
// class Owner
// {
//     public string $name;
// }
// class Car
// {
//     public string $make;
//     public string $model;
//     protected bool $driving;
//     protected bool $parked;
//     protected string $registration;
//     protected Owner $owner;
//     public function purchase(Owner $owner)
//     {
//         $this->owner = $owner;
//     }
//     public function park()
//     {
//         $this->drive('left');
//         $this->drive('backwards');
//         $this->parked = true;
//         $this->stop();
//     }
//     public function drive(string $direction)
//     {
//         $this->driving = true;
//     }
//     public function stop()
//     {
//         $this->driving = false;
//     }
// }
















// What happens when we have similar attributes and functions across classes? We can use Extension to extend a class
// class Car
// {
//     private string $make;
//     public function set(string $make)
//     {
//         $this->make = $make;
//     }
//     public function make()
//     {
//         return $this->make;
//     }
// }

// class Van extends Car {}
// class Motorbike extends Car {}
// $van = new Van();
// $van->set('Ford');
// var_dump($van);








// We can use something called a static method to call a method on a class without creating the object first
// class Owner
// {
//     public string $name;
// }
// class Car
// {
//     protected Owner $owner;
//     public static function purchase(Owner $owner)
//     {
//         $car = new self();
//         $car->owner = $owner;
//         return $car;
//     }
// }

// $owner = new Owner();
// $owner->name = 'Steve';

// // Let's purchase a car
// $car = Car::purchase($owner);

// var_dump($car);











// Let's take another example, this time we will look at a method called chaining.
// Chaining is where you can call methods on objects after each other.
// Each method will change or do something with your object, before returning the new state of the object.
// class User
// {
//     protected string $email;
//     public function setEmail(string $email): self
//     {
//         $this->email = $email;

//         return $this;
//     }
// }











// Lastly let's look at a more complex example using something called an Interface, which is almost like a set of instructions for a class - telling it what it should look like, but it can only tell it what methods it should have available.
interface Person
{
    public function setEmail(string $email): self;
    public function setName(string $name): self;
    public function setJob(string $job): self;
}

// A person should have an email, name and a job. Let's implement a Student
class Student implements Person
{
    protected string $email;
    protected string $name;
    protected string $job;
    public function __construct(
        string $email, string $name, string $job
    ) {
        $this->setEmail($email);
        $this->setName($name);
        $this->setJob($job);
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function setJob(string $job): self
    {
        $this->job = $job;
        return $this;
    }
}
$gary = new Student('gary@student.com', 'Gary', 'Student');

// Now let us say that Gary get's a part time job
$gary->setJob('Bartender');


// Now let's have a look at a teacher?
class Teacher implements Person
{
    protected bool $working;
    protected string $email;
    protected string $name;
    protected string $job;
    public function __construct(
        string $email, string $name, string $job = 'Teacher'
    ) {
        $this->setEmail($email);
        $this->setName($name);
        $this->setJob($job);
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function setJob(string $job = 'Teacher'): self
    {
        $this->job = $job;
        return $this;
    }
    public function work(): self
    {
        $this->working = true;
        return $this;
    }
}
// Our teacher class looks and behaves like our Student class, but the default job is teacher.
// Also they have a method to tell them to work, which the student does not have.
