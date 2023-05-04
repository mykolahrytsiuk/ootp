<?php

namespace OOP\Lab1;

declare(strict_types=1);


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}