<?php

declare(strict_types=1);

namespace App\Library;

class Book implements Titled
{
    private $title;
    private $pages;
    private $current = 1;

    public function __construct (string $title, int $pages) 
    {    
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read($num)  
    {
       $this->current += $num;
    }

    public function currentPage() : Book
    {
       $this->current;
       return $this;
    }

    public function title() : string
    {
        return $this->title;
    }
 
}

$book = new Book("Zero: The Biography of a Dangerous Idea", 256);

// read 12 pages
$book->read(12);
dump($book->currentPage()); // 13 - start on page 1

// read another 25 pages
$book->read(25);
dump($book->currentPage()); // 38