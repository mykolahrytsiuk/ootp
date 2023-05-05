<?php

declare(strict_types=1);

namespace OOP\Lab7;

class Memento
{
    private $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
