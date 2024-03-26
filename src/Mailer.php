<?php

declare(strict_types=1);

namespace App;

class Mailer
{
    public function sendMail(string $message): void
    {
        echo 'Sending email...' . PHP_EOL;
    }
}
