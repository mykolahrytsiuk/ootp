<?php

declare(strict_types=1);

namespace OOP\Lab3\Tests;

use OOP\Lab3\AuthService;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanLoginEmail()
    {
        $login = 'johndoe@gmail.com';
        $password = 'testPassword123';

        $authService = new AuthService();

        $user = $authService->authorize($login, $password);

        $this->assertIsArray($user);
        $this->assertArrayHasKey('email', $user);
        $this->assertArrayHasKey('password', $user);
        $this->assertEquals($login, $user['email']);
        $this->assertEquals($password, $user['password']);
    }

    public function testCanLoginPhone()
    {
        $login = '380678309564';
        $password = 'testPassword121';

        $authService = new AuthService();

        $user = $authService->authorize($login, $password);

        $this->assertIsArray($user);
        $this->assertArrayHasKey('phone', $user);
        $this->assertArrayHasKey('password', $user);
        $this->assertEquals($login, $user['phone']);
        $this->assertEquals($password, $user['password']);
    }
}