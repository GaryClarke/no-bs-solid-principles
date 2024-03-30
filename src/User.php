<?php

declare(strict_types=1);

namespace App;

class User
{
    public function __construct(
        private Email $email,
        private string $username
    ) {
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
