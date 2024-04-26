<?php

declare(strict_types=1);

namespace App;

class DatabaseLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        // Log message to a database..faked here
        echo "Log entry added to database: $message" . PHP_EOL;
    }
}
