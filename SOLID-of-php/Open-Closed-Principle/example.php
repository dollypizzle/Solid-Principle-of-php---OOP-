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
    public $width;
    public $height;

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    public $radius;

    public function getArea()
    {
        return pow($this->radius, 2) * PI;
    }
}


public function Area($shapes)
{
    $area = 0;
    $shapes->each(function ($shape) use (&$area) {
    $area += $shape->getArea();
    });
    return $area;
}
