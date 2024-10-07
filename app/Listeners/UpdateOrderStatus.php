<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateOrderStatus
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $order = Order::find($event->orderId);

        if ($event instanceof OrderCreated) {
            $order->state = 'created';
        }

        if ($event instanceof PaymentProcessed) {
            $order->state = 'paid';
        }

        if ($event instanceof OrderShipped) {
            $order->state = 'shipped';
        }

        $order->save();
    }
}