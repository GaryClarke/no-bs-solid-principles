<?php

declare(strict_types=1);

namespace App;

class FileArchiver implements FileArchiverInterface
{
    public function read(string $filename): string
    {
        if (!file_exists($filename)) {
            throw new Exception("The file $filename does not exist.");
        }

        $content = file_get_contents($filename);
        if ($content === false) {
            throw new Exception("Could not read from the file $filename.");
        }

        return $content;
    }

    public function compress(string $content, string $destination): void
    {
        $gzFile = gzopen($destination, 'w9'); // 'w9' for maximum compression
        gzwrite($gzFile, $content);
        gzclose($gzFile);
    }
}