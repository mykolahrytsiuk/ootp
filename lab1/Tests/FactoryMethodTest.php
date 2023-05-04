<?php
declare(strict_types=1);

namespace OOP\Lab1\Tests;

use PHPUnit\Framework\TestCase;
use OOP\Lab1\FileLoggerFactory;
use OOP\Lab1\StdoutLoggerFactory;
use OOP\Lab1\FileLogger;
use OOP\Lab1\StdoutLogger;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
