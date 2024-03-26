<?php

declare(strict_types=1);

namespace App;

class Notifier
{
    public function __construct(
        private SmsDispatcher $dispatcher
    ) {
    }

    public function notify($message): void
    {
        $this->dispatcher->dispatch($message);
    }
}
