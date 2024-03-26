<?php

declare(strict_types=1);

use App\Mailer;
use App\SpendTracker;

require_once 'vendor/autoload.php';

$budgetTracker = new SpendTracker(new Mailer());

$budgetTracker->trackSpending(1200);

