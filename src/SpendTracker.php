<?php

declare(strict_types=1);

namespace App;

class SpendTracker {
    private int $maxBudget;
    private int $currentSpending = 0;

    public function __construct(
        private Mailer $mailer
    ) {
    }

    public function trackSpending($amount): void
    {
        $this->currentSpending += $amount;

        if ($this->currentSpending > $this->maxBudget) {
            $this->notify('Budget limit exceeded');
        }
    }

    public function notify($message): void
    {
        $this->mailer->sendMail($message);
    }

    public function getCurrentSpending(): int
    {
        return $this->currentSpending;
    }

    public function setMaxBudget(int $maxBudget): void
    {
        $this->maxBudget = $maxBudget;
    }
}
