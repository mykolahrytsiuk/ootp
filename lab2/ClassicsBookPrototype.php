<?php

declare(strict_types=1);

namespace OOP\Lab2;

class ClassicsBookPrototype extends BookPrototype
{
    protected $category = 'Classics';

    public function __clone()
    {
    }
}