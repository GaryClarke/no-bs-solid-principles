<?php

declare(strict_types=1);

namespace App;

class OrderProcessor
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
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
