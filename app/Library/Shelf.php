<?php

declare(strict_types=1);

namespace App\Library;

class Shelf 
{
    private $catalogue = [];

    public function addItem(Titled $item)
    {
        $this->catalogue[] = $item;
    }

    public function titles() : array
    {
        $collection = collect($this->catalogue);
        return $collection->map(fn($item) => $item->title())->all();
    }

}

// $shelf = new Shelf();
// $shelf->addBook($book);
// $shelf->addBook(new Book("The Catcher in the Rye", 277));
// $shelf->addBook(new Book("Stamped from the Beginning", 582));

// dump($shelf->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning"]

