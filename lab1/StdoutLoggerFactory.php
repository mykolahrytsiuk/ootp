<?php

declare(strict_types=1);

namespace OOP\Lab1;

class StdoutLoggerFactory implements ILoggerFactory
{
    public function createLogger(): ILogger
    {
        return new StdoutLogger();
    }
}
