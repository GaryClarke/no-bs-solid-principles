<?php

require_once 'vendor/autoload.php';

use App\FileOperationInterface;

function archiveFile(string $source, string $destination, FileOperationInterface $fileArchiver)
{
    $content = $fileArchiver->read($source);

    $fileArchiver->compress($content, $destination);
}
