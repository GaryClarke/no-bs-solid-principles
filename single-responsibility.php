<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Mailer;
use App\SpendTracker;
use App\Notifier;
use App\SmsDispatcher;


# A module should be responsible to one, and only one, actor
# A class should have only one reason to change

# Solves the problem of tight coupling and change chains..among other things

$budgetTracker = new SpendTracker(new Notifier(new SmsDispatcher()));

$budgetTracker->trackSpending(1200);

