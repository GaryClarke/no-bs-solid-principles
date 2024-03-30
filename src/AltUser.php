<?php

declare(strict_types=1);

namespace App;

class AltUser extends User
{
    public function getEmail(): Email
    {
        return $this->getUsername(); # now becomes impossible to break LSP this way 💪
    }
}
