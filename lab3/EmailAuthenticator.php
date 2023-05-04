<?php

declare(strict_types=1);

namespace OOP\Lab3;

class EmailAuthenticator implements IAuthenticator
{
    public function auth($login, $password)
    {
        $users = json_decode(file_get_contents('../users.json'), true);

        $user = array_filter($users, function($item) use ($login, $password) {
            return $item['email'] === $login && $item['password'] === $password;
        });
        
        return current($user);
    }

    public function supports($login): bool
    {
        return filter_var($login, FILTER_VALIDATE_EMAIL) !== false;
    }
}
