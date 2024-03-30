<?php

declare(strict_types=1);

namespace App;

class AltUser extends User
{
    public function getEmail(): string
    {
        return $this->getUsername();
    }
}
