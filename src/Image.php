<?php

declare(strict_types=1);

namespace App;

class Image implements HtmlElementInterface
{
    public function __construct(private string $src)
    {
    }

    public function toHtml(): string
    {
        return "<img src='{$this->src}' />";
    }
}