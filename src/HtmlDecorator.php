<?php

declare(strict_types=1);

namespace App;

abstract class HtmlDecorator implements HtmlElementInterface
{
    public function __construct(protected HtmlElementInterface $element)
    {
    }
}
