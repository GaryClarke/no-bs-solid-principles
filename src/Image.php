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
        // // <a html="https://www.garyclarke.tech"><img src="https://placehold.co/300x300" /></a>
        return "<img src='{$this->src}' />";
    }
}
