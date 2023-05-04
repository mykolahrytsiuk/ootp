<?php

declare(strict_types=1);

namespace OOP\Lab1;

interface ILoggerFactory
{
    public function createLogger(): ILogger;
}
