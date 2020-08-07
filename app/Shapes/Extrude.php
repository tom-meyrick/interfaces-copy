<?php

namespace App\Shapes;

// Create an Extrude class in the App\Shapes namespace. On construction it should take a class that implements ShapeInterface as well as a depth. It should have a volume() method which returns the volume (area × depth) of the given shape. Make sure you use type-hinting to make sure you can't pass non-shapes into Extrude.

class Extrude 
{
    private $shape;
    private $depth;

    public function __construct(ShapeInterface $shape, $depth)
    {
        $this->shape = $shape;
        $this->depth = $depth;
    }

    public function volume()  : float
    {
       return $this->shape->area() * $this->depth;
    }

}

// public function extrude()
// {
//     echo "\n02) Extrude\n";

//     create 2D objects
//     $square = new Shapes\Square(4);
//     $circle = new Shapes\Circle(4);
//     $rectangle = new Shapes\Rectangle(4, 5);

//     turn into 3D objects
//     $cube = new Shapes\Extrude($square, 4);
//     $cylinder = new Shapes\Extrude($circle, 4);
//     $cuboid = new Shapes\Extrude($rectangle, 7);

//     log the volumes of each
//     dump(
//         $cube->volume(), // 64
//         $cylinder->volume(), // 201.06192982975
//         $cuboid->volume() // 140
//     );

//     try {
//         new Shapes\Extrude($cube, 12); // shouldn't work
//         dump("Accepted. Oops!"); // if you see this, something's not right
//     } catch (\TypeError $e) {
//         dump("Not accepted. Good work!"); // if you see this, you've done it right
//     }
// }

