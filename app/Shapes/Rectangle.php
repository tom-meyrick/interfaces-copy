<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private $length;
    private $width;

    public function __construct($length, $width) 
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }
}
