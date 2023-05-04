<?php

declare(strict_types=1);

namespace OOP\Lab1;


class StdoutLogger implements ILogger
{
    public function log(string $message)
    {
        echo $message;
    }
}