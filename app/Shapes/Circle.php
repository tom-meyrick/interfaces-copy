<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius) 
    {
        $this->radius = $radius;
    }

    public function area() {
        return $this->radius * 2 * pi() * 2;
    }
}
