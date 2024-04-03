<?php

namespace App;

use Exception;

class FileReader implements FileOperationInterface
{
    public function read(string $filename)
    {
        // Some implementation details

        echo 'Reading ' . $filename . PHP_EOL;
    }

    public function write($content): void
    {
        throw new Exception("Cannot perform this operation.");
    }

    public function delete(): void
    {
        throw new Exception("Cannot perform this operation.");
    }
}
