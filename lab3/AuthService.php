<?php

declare(strict_types=1);

namespace OOP\Lab3;

class AuthService
{
    private $strategies = [
        EmailAuthenticator::class,
        PhoneAuthenticator::class
    ];

    public function authorize($login, $password)
    {
        foreach ($this->strategies as $strategy) {
            $strategy = new $strategy();
            
            if ($strategy->supports($login)) {
                return $strategy->auth($login, $password);
            }
        }

        return false;
    }

}