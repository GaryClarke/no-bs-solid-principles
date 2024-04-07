<?php

declare(strict_types=1);

namespace App;

final class Image implements HtmlElementInterface
{
    public function __construct(private string $src)
    {
    }

    public function toHtml(): string
    {
        return "<img src='{$this->src}' />";
    }
}


// "<a href='https://www.garyclarke.tech'><img src='{$this->src}' /></a>";