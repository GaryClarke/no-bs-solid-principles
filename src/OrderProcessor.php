<?php

declare(strict_types=1);

namespace App;

class OrderProcessor
{
    private FileLogger $logger;

    public function __construct()
    {
        $this->logger = new FileLogger();
    }

    public function processOrder(array $orderData): array
    {
        // Process the order...
        $orderData['order_processed'] = true;

        // Log the order processing
        $this->logger->log("Order processed: " . json_encode($orderData));

        // Return the processed order
        return $orderData;
    }
}
