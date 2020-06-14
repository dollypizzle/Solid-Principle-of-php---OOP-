<?php
// Declare the class
class Car {
 
  // properties
  public $comp; 
  public $color = 'beige';
  public $hasSunRoof = true;
 
   // method that says hello
  public function hello()
  {
    return "Beep I am a " . $this->comp . ", and I am " . $this->color;
  }
}
 
// Create an instance
$bmw = new Car ();
$mercedes = new Car ();
 
// Get the values
var_dump($bmw->color); // beige
var_dump($mercedes->color); // beige

 
// Set the values
$bmw->color = 'blue';
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";
$mercedes->color = "Red";
 
// Get the values again
var_dump($bmw->color); // blue
var_dump($mercedes->color); // beige
var_dump($bmw->comp); // BMW
var_dump($mercedes->comp); // Mercedes Benz
 
// Use the methods to get a beep
var_dump($bmw->hello()); // beep
var_dump($mercedes->hello()); // beep