<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderShipped
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderId;
    public $shippingDetails;

    /**
     * Create a new event instance.
     *
     * @param int $orderId
     * @param array $shippingDetails
     */
    public function __construct($orderId, $shippingDetails = [])
    {
        $this->orderId = $orderId;
        $this->shippingDetails = $shippingDetails;
    }
}