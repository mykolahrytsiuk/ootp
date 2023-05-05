<?php

declare(strict_types=1);

namespace OOP\Lab4\Commands;

interface ICommand
{
    public function execute();

    public function undo();
}