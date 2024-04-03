<?php

declare(strict_types=1);

namespace App;

interface FileOperationInterface
{
    public function read(string $filename);

    public function write($content);

    public function delete();
}