<?php

declare(strict_types=1);

namespace App;

interface FileOperationInterface
{
    public function read(string $filename): string;

    public function write(string $filename, string $content): void;

    public function delete(string $filename): void;

    public function rename(string $oldName, string $newName): void;

    public function copy(string $source, string $destination): void;

    public function move(string $source, string $destination): void;

    public function create(string $filename): void;

    public function getSize(string $filename): int;

    public function compress(string $content, string $destination): void;

    public function getLastModified(string $filename): \DateTime;

    public function changePermissions(string $filename, int $permissions): void;

    public function lock(string $filename): bool;

    public function unlock(string $filename): void;

    public function getPath(string $filename): string;
}
