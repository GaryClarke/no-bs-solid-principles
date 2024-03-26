<?php

declare(strict_types=1);

namespace App\Tests;

use App\Mailer;
use App\SpendTracker;
use PHPUnit\Framework\TestCase;
use Mockery;

class SpendTrackerTest extends TestCase
{
    public function testTrackSpending()
    {
        $mailer = Mockery::mock(Mailer::class);
        $unit = new SpendTracker($mailer);

        $mailer->expects('sendMail');

        $unit->setMaxBudget(100);

        $unit->trackSpending(300);

        $this->assertSame(300, $unit->getCurrentSpending());
    }
}