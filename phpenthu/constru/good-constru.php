<?php

class Car {
  private $model;
  
  //__construct
  public function __construct ($model)
  {
    $this->model = $model;
  }
   
  public function getCarModel()
  {
    return ' The car model is: ' . $this->model;
  }
}
  
//We pass the value of the variable once we create the object
$car1 = new Car("Mercedes");
  
var_dump($car1->getCarModel());



//How to write a constructor method without risking an error?


class Car2 {
    // The $model property has a default value of "N/A"
    private $model = "N/A";
    
    // We don’t have to assign a value to the $model property
    //since it already has a default value
    public function __construct($model = null)
    {
      // Only if the model value is passed it will be assigned
      if($model) 
      { 
        $this->model = $model;
      }
    }
     
    public function getCarModel()
    {
      return ' The car model is: ' . $this->model;
    }
  }
    
  //We create the new Car object without passing a value to the model
  $car1 = new Car2();
  $car2 = new Car2('Mercedes');
 
    
  var_dump($car1->getCarModel());
  var_dump($car2->getCarModel());
