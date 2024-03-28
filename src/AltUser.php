<?php

declare(strict_types=1);

namespace App;

class AltUser extends User
{
    private string $username;

    public function __construct(
        string $email,
        string $username
    ) {
        parent::__construct($email);
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->username;
    }
}
