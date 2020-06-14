<?php

class Car{
  private $model;
 
  // A constructor method.
  public function __construct($model)
  {
    $this->model = $model;
  }
}

$car1 = new Car();

var_dump($car1);