<?php

declare(strict_types=1);

namespace App;

interface FileArchiverInterface
{
    public function read(string $filename): string;

    public function compress(string $content, string $destination): void;
}