<?php

require_once 'vendor/autoload.php';

use App\FileOperationInterface;

# No client should be forced to depend on methods it does not use

# ISP aims to split large interfaces into smaller and more specific ones so that clients only need to know about the methods that are of interest to them

# What problem(s) does this solve
# - Prevents a class carrying unwanted dependencies and methods which it does not use.
# - Keeps code robust and easy to maintain
# - Reduces the risk of bugs due to changes in unrelated methods affecting classes that shouldn't logically be affected.


function archiveFile(string $source, string $destination, FileOperationInterface $fileArchiver)
{
    $content = $fileArchiver->read($source);

    $fileArchiver->compress($content, $destination);
}
