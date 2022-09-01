<?php

class AreaCalculator
{
    /**
     * Calculate the total area of the rectangles.
     *
     * @param  Illuminate\Support\Collection  $rectangles
     * @return float
     */
    public function Area($rectangles)
    {
        $area = 0;
        $rectangles->each(function ($rectangle) use (&$area) {
            $area += ($rectangle->width * $rectangle->height); 
        });
        return $area;
    }
}

class AreaCalculator2
{
    /**
     * Calculate the total area of the shapes.
     *
     * @param  Illuminate\Support\Collection  $shapes
     * @return float
     */
    public function Area($shapes)
    {
        $area = 0;
        $shapes->each(function ($shape) use (&$area) {
            switch (gettype($shape)) {
                case "Rectangle":
                    $area += ($shape->width * $shape->height); 
                    break;
                case "Circle":
                    $area += (M_PI * pow($shape->radius, 2));
                    break;
            }
        });
        return $area;
    }
}

