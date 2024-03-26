<?php

declare(strict_types=1);

namespace App\Tests;

use App\Mailer;
use App\Notifier;
use App\SpendTracker;
use PHPUnit\Framework\TestCase;
use Mockery;

class SpendTrackerTest extends TestCase
{
    public function testTrackSpending()
    {
        $notifier = Mockery::mock(Notifier::class);
        $unit = new SpendTracker($notifier);

        $notifier->expects('notify');

        $unit->setMaxBudget(100);

        $unit->trackSpending(300);

        $this->assertSame(300, $unit->getCurrentSpending());
    }
}