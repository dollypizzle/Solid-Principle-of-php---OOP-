<?php

abstract class Shape
{
    // protected $area;

    // public function __construct($area)
    // {
    //     $this->area = $area;
    // }

    // public function getArea()
    // {
    //     return $this->area;
    // }

    abstract protected function getArea();

}

class Rectangle extends Shape
{
    public $width;  
    public $height;

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Circle extends Shape
{
    protected $radius = 5;

    public function getArea()
    {
        return pow($this->radius, 2) * M_PI;
    }
}

class Triangle extends Shape{
    protected $base = 4;

    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
} 


$circle = new Circle;
var_dump($circle->getArea());

$rectangle = new Rectangle();
echo($rectangle->getArea());

$triangle = new Triangle;
var_dump($triangle->getArea());

