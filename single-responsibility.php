<?php

declare(strict_types=1);

use App\Mailer;
use App\SpendTracker;

require_once 'vendor/autoload.php';

# A module should be responsible to one, and only one, actor
# A class should have only one reason to change

# Solves the problem of tight coupling and change chains..among other things

$budgetTracker = new SpendTracker(new Mailer());

$budgetTracker->trackSpending(1200);

