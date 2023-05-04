<?php

declare(strict_types=1);

namespace OOP\Lab1;

class FileLoggerFactory implements ILoggerFactory
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): ILogger
    {
        return new FileLogger($this->filePath);
    }
}
