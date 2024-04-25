<?php

declare(strict_types=1);

namespace App\Tests;

use App\LoggerInterface;
use App\OrderProcessor;
use PHPUnit\Framework\TestCase;

class OrderProcessorTest extends TestCase
{
    public function testOrdersAreProcessedCorrectly(): void
    {
        $loggerMock = $this->createMock(LoggerInterface::class);

        // Configure the mock to expect the log method to be called once
        // with a specific message
        $loggerMock->expects($this->once())
            ->method('log')
            ->with($this->equalTo('Order processed: {"item":"Book","quantity":1,"order_processed":true}'));

        $unit = new OrderProcessor($loggerMock);

        $testData = ['item' => 'Book', 'quantity' => 1];

        $result = $unit->processOrder($testData);

        // Check if 'order_processed' key is set to true
        $this->assertTrue($result['order_processed']);
    }
}
