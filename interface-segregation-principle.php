<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\FileArchiverInterface;

function archiveFile(string $source, string $destination, FileArchiverInterface $fileArchiver)
{
    $content = $fileArchiver->read($source);

    $fileArchiver->compress($content, $destination);

    echo "$source compressed to $destination. Have a nice day" . PHP_EOL;
}
