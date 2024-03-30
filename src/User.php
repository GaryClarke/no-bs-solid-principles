<?php

declare(strict_types=1);

namespace App;

class User
{
    public function __construct(
        private string $email,
        private string $username
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
