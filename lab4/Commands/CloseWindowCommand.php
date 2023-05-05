<?php

declare(strict_types=1);

namespace OOP\Lab4\Commands;
use OOP\Lab4\Commands\ICommand;

class CloseWindowCommand implements ICommand
{
    public function execute()
    {
        return 'Windows closed';
    }

    public function undo()
    {
        return 'Windows opened';
    }
}