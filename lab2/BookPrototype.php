<?php

declare(strict_types=1);

namespace OOP\Lab2;

abstract class BookPrototype
{
    protected $title;
    protected $category;

    abstract public function __clone();

    final public function getTitle(): string
    {
        return $this->title;
    }

    final public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}