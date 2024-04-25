<?php

declare(strict_types=1);

namespace App;

interface LoggerInterface
{
    public function log(string $message): void;
}
