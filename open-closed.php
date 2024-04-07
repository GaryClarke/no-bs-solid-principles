<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Image;
use App\LinkDecorator;

$src = 'https://placehold.co/300x300';

$image = new Image($src);
$link = new LinkDecorator($image, 'https://www.garyclarke.tech');

?>

<html lang="en">
    <?php echo $link->toHtml() ?>
</html>
