<?php

declare(strict_types=1);

namespace src;

class BudgetTracker {
    private int $maxBudget = 1000;
    private int $currentSpending = 0;

    public function __construct(
        private Mailer $mailer
    ) {

    }

    public function trackSpending($amount): void
    {
        $this->currentSpending += $amount;
        if ($this->currentSpending > $this->maxBudget) {
            $this->sendNotification('Budget limit exceeded');
        }
    }

    public function sendNotification($message): void
    {
        $this->mailer->sendMail($message);
    }
}