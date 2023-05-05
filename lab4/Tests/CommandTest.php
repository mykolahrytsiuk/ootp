<?php

declare(strict_types=1);

namespace OOP\Lab3\Tests;

use OOP\Lab4\Commands\CloseCentralLockCommand;
use OOP\Lab4\Commands\CloseWindowCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCloseCentralLockCommand()
    {
        $closeCentralLockCommand = new CloseCentralLockCommand();

        $result = $closeCentralLockCommand->execute();

        $this->assertEquals('Central lock closed', $result);

        $result = $closeCentralLockCommand->undo();

        $this->assertEquals('Central lock opened', $result);
    }

    public function testCloseWindowCommand()
    {
        $closeWindowCommand = new CloseWindowCommand();

        $result = $closeWindowCommand->execute();

        $this->assertEquals('Windows closed', $result);

        $result = $closeWindowCommand->undo();

        $this->assertEquals('Windows opened', $result);
    }
}