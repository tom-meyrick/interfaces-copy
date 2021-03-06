<?php

declare(strict_types=1);

namespace App\Library;

class CD implements Titled
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function title() : string
    {
        return $this->title;
    }
}