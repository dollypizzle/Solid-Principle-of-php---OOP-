<?php

class Car {
  // Private property inside the class
  private $model;
 
  //Public setter method
  public function setModel($model)
  {
    $this->model = $model;
  }
 
  public function tyre()
  {
    return "beep! I am a " . $this->model;
  }
}
 
 
//The child class inherits the code from the parent class
class SportsCar extends Car {
  //No code in the child class
}
 
 
//Create an instance from the child class
$sportsCar1 = new SportsCar();
  
// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$sportsCar1->setModel('Mercedes Benz');
  
//Use another method that the child class inherited from the parent class
var_dump($sportsCar1->tyre());




//How can a child class have its own methods and properties?
//-------------------------------------------------------------------------

// The parent class has its properties and methods
class Car2 {
  
    //A private property or method can be used only by the parent.
    private $model;
    
    // Public methods and properties can be used by both the parent and the child classes.
    public function setModel($model)
    {
      $this->model = $model;
    }
     
    public function getModel()
    {
      return $this->model;
    }
  }
   
    
  //The child class can use the code it inherited from the parent class, 
  // and it can also have its own code 
  class SportsCar2 extends Car2{
   
    private $style = ' fast and furious';
   
    public function driveItWithStyle()
    {
      return 'Drive a '  . $this->getModel() . $this->style ;
    }
  }
   
   
  //create an instance from the child class
  $sportsCar2 = new SportsCar2();
     
  // Use a method that the child class inherited from the parent class
  $sportsCar2->setModel('Ferrari');
    
  // Use a method that was added to the child class
  var_dump($sportsCar2->driveItWithStyle());


//------------------------------------------------------------------------------------------------------------
//   How to override the parent’s properties and methods in the child class?

class Car3 {
    public function hello()
    {
      return "beep";
    }
  }
   
  //The child class has hello method that returns "Halllo"
  class SportsCar3 extends Car3 {
    public function hello()
    {
      return "Hallo";
    }
  }
      
  //Create a new object
  $sportsCar3 = new SportsCar3();
    
  //Get the result of the hello method
  var_dump($sportsCar3->hello());
  