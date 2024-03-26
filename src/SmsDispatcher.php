<?php

declare(strict_types=1);

namespace App;

class SmsDispatcher
{
    public function dispatch(string $message): void
    {
        echo 'Sending sms...' . PHP_EOL;
    }
}
