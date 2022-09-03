<?php

class Car {
  //The $model property is private, thus it can be accessed 
  // only from inside the class
  private $model;
  
  //Public setter method
  public function setModel($model)
  {
    $this->model = $model;
  }
}
  
   
// The child class
class SportsCar extends Car{
  //Tries to get a private property that belongs to the parent
  public function hello()
  {
    return "beep! I am a " . $this->model;
  }
}
   
//Create an instance from the child class
$sportsCar1 = new SportsCar();
  
//Set the class model name
$sportsCar1->setModel('Mercedes Benz');
   
//Get the class model name
var_dump($sportsCar1->hello());
