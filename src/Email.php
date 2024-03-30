<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

# Immutable
# Equality based on attributes
# Self-validating
# Can be used as Entity attributes
readonly class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if (!$this->isValidEmail($email)) {
            throw new InvalidArgumentException("Invalid email address.");
        }

        $this->email = $email;
    }

    private function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function value(): string
    {
        return $this->email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}
