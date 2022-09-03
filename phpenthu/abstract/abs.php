<?php

// Abstract classes are declared with the abstract keyword, and contain abstract methods.
abstract class Car1 {
    abstract public function calcNumMilesOnFullTank();
  }

//-------------we can have non abstract methods inside an abstract class
abstract class Car {
    // Abstract classes can have properties
    protected $tankVolume;
   
    // Abstract classes can have non abstract methods
    public function setTankVolume($volume)
    {
      $this->tankVolume = $volume;
    }
   
    // Abstract method
    abstract public function calcNumMilesOnFullTank();
}
  
class Honda extends Car {
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
      $miles = $this->tankVolume*10;
      return $miles;
    }
}  

class Toyota extends Car {
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
      return $miles = $this->tankVolume*33;
    }
   
    public function getColor()
    {
      return "beige";
    }
}

$toyota = new Toyota();
$toyota->setTankVolume(10);
$honda = new Honda();
$honda->setTankVolume(10);
var_dump($toyota->calcNumMilesOnFullTank());//330
var_dump($toyota->getColor());//beige
var_dump($honda->calcNumMilesOnFullTank());