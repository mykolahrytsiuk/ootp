<?php

declare(strict_types=1);

namespace OOP\Lab2;

class FantasyBookPrototype extends BookPrototype
{
    protected $category = 'Fantasy';

    public function __clone()
    {
    }
}