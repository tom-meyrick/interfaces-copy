<?php

declare(strict_types=1);

namespace App\Library;

interface Titled 
{
    public function titles() : string;
}


// Copy across your Book, Shelf, and Library classes from yesterday. Keep them in the App\Library namespace.

// Now create a Titled interface with a public function title() method signature.

// Update the Shelf class so that it can accept any sort of Titled class.

// Now create a DVD and CD class, that both implement the Titled interface.