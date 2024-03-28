<?php

declare(strict_types=1);

namespace App;

class LinkDecorator extends HtmlDecorator
{
    public function __construct(
        protected HtmlElementInterface $element,
        private string $url
    ) {
        parent::__construct($element);
    }

    public function toHtml(): string
    {
        return "<a href='{$this->url}'>{$this->element->toHtml()}</a>";
    }
}
