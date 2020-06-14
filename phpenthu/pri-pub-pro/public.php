<?php
 
class Car {
 
  // public methods and properties.
  public $model;    
 
  public function getModel()
  {
    return "The car model is " . $this->model;
  }
}
 
$mercedes = new Car();
//Here we access a property from outside the class
$mercedes->model = "Mercedes";
//Here we access a method from outside the class
 var_dump($mercedes->getModel());
