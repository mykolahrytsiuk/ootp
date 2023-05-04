<?php

declare(strict_types=1);

namespace OOP\Lab2\Tests;

use OOP\Lab2\FantasyBookPrototype;
use OOP\Lab2\ClassicsBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fantasyPrototype = new FantasyBookPrototype();
        $classicsPrototype = new ClassicsBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fantasyPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FantasyBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $classicsPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $this->assertInstanceOf(ClassicsBookPrototype::class, $book);
        }
    }
}