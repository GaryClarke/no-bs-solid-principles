<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Image;

$src = 'https://placehold.co/300x300';

$image = new Image($src);

?>

<html lang="en">
    <?php echo $image->toHtml() ?>
</html>
