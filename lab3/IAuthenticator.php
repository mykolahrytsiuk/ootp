<?php

declare(strict_types=1);

namespace OOP\Lab3;

interface IAuthenticator
{
    /**
     * @param mixed $login
     * @param mixed $password
     */
    public function auth($login, $password);

    public function supports($login): bool;
}