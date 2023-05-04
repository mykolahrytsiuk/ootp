<?php

namespace OOP\Lab1;

declare(strict_types=1);

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
