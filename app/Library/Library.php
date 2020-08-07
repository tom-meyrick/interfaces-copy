<?php

declare(strict_types=1);

namespace App\Library;

class Library 
{
    private $shelves = [];

    public function addShelf(Shelf $shelf) 
    {
        $this->shelves[] = $shelf;
    }

    public function titles()  : array
    {
        $collection = collect($this->shelves);
       return $collection->flatMap(fn($item) => $item->titles())->all();
       //reduce - merge
       //flatmap
    }
}

// Create a class Library. It should have an addShelf() method, which takes a Shelf object. It should have a titles() method that lists all the titles of all the books on all the shelves in the library.
