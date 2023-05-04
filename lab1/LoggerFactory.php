<?php

namespace OOP\Lab1;

declare(strict_types=1);

interface LoggerFactory
{
    public function createLogger(): Logger;
}
