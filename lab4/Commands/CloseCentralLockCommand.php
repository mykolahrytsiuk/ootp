<?php

declare(strict_types=1);

namespace OOP\Lab4\Commands;
use OOP\Lab4\Commands\ICommand;

class CloseCentralLockCommand implements ICommand
{
    public function execute()
    {
        return 'Central lock closed';
    }

    public function undo()
    {
        return 'Central lock opened';
    }
}