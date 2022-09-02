<?php

interface Shape {
    public function getArea();
}

class Rectangle implements Shape {
  
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function getArea() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
  
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function getArea() {
        return pow($this->radius, 2) * pi();
    }
}

class Square implements Shape {
  
    private $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
    
    public function getArea() {
        return pow($this->length, 2);
    }
}

class AreaCalculator {
  
    protected $shapes;
    
    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }
    
    public function sum() {
        $area = [];
        
        foreach($this->shapes as $shape) {
            $area[] = $shape->getArea();
        }
    
        return array_sum($area);
    }
}


$circle = new Circle(2);
var_dump($circle->getArea());

$rectangle = new Rectangle(2,3);
var_dump($rectangle->getArea());

$square = new Square(7);
var_dump($square->getArea());

