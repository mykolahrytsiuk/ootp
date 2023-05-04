<?php

declare(strict_types=1);

namespace OOP\Lab3;

class PhoneAuthenticator implements IAuthenticator
{
    public function auth($login, $password)
    {
        $users = json_decode(file_get_contents('../users.json'), true);

        $user = array_filter($users, function($item) use ($login, $password) {
            return $item['phone'] === $login && $item['password'] === $password;
        });
        
        return current($user);
    }

    public function supports($login): bool
    {
        return is_numeric($login);
    }
}
