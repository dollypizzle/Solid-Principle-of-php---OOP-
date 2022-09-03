<?php
 
// class Car {
 
//   //the private access modifier denies access to the method from outside the class’s scope
//   private $model;
 
//   //the public access modifier allows the access to the method from outside the class
//   public function setModel($model)
//   {
//     $this->model = $model;
//   }
  
//   public function getModel()
//   {
//     return "The car model is  " . $this->model;
//   }
// }
 
class Car {
 
  //the private access modifier denies access to the property from outside the class’s scope
  private $model;
 
  //the public access modifier allows the access to the method from outside the class
  public function setModel($model)
  {
    //validate that only certain car models are assigned to the $carModel property
    $allowedModels = array("Mercedes benz","BMW");
 
    if(in_array($model,$allowedModels))
    {
      $this->model = $model;
    }
    else
    {
      $this->model = "not in our list of models.";
    }
  }
  
  public function getModel()
  {
    return "The car model is  " . $this->model;
  }
}
 
 

$mercedes = new Car();
//Sets the car’s model
$mercedes->setModel("Mercedes benz");
//Gets the car’s model
echo $mercedes->getModel();
 
