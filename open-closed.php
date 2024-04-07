<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Image;
use App\LinkDecorator;

$src = 'https://placehold.co/300x300';

$element = new Image($src);
$element = new LinkDecorator('https://www.garyclarke.tech/p/php-professional-toolkit-plus', $element);

?>

<html lang="en">
    <?php echo $element->toHtml() ?>
</html>
