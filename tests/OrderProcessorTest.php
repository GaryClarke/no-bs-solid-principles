<?php

declare(strict_types=1);

namespace App\Tests;

use App\OrderProcessor;
use PHPUnit\Framework\TestCase;

class OrderProcessorTest extends TestCase
{
    public function testOrdersAreProcessedCorrectly(): void
    {
        $unit = new OrderProcessor();

        $testData = ['item' => 'Book', 'quantity' => 1];

        $result = $unit->processOrder($testData);

        // Check if 'order_processed' key is set to true
        $this->assertTrue($result['order_processed']);
    }
}
