<?php
 
class Car {
 
  //private
  private $model;
    
  public function getModel()
  {
    return "The car model is " . $this->model;
  }
}
 
$mercedes = new Car();
 
// We try to access a private property from outside the class.
$mercedes->model = "Mercedes benz";
echo $mercedes->getModel();
 