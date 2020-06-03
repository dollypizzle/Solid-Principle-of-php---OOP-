<?php

interface Shape
{
    /**
     * Calculate the area of the shape.
     *
     * @return mixed
     */
    public function getArea();
}

class Rectangle implements Shape
{
    protected $width = 3; 
    protected $height = 4;

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    protected $radius = 5;

    public function getArea()
    {
        return pow($this->radius, 2) * M_PI;
    }
}

class Triangle implements Shape{
    protected $base = 4;

    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
} 


$circle = new Circle;
echo $circle->getArea();

$rectangle = new Rectangle;
echo $rectangle->getArea();

$triangle = new Triangle;
echo $triangle->getArea();

