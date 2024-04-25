<?php

declare(strict_types=1);

namespace App;

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
    }
}
