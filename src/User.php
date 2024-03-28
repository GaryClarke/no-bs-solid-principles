<?php

declare(strict_types=1);

namespace App;

class User
{
    public function __construct(
        private string $email,
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
