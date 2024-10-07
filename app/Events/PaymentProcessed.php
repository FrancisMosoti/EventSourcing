<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PaymentProcessed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderId;
    public $paymentDetails;


   /**
     * Create a new event instance.
     *
     * @param int $orderId
     * @param array $paymentDetails
     */
    public function __construct($orderId, $paymentDetails = [])
    {
        $this->orderId = $orderId;
        $this->paymentDetails = $paymentDetails;
    }
}