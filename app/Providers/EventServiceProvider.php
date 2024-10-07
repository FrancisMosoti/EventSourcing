<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\OrderCreated;
use App\Events\PaymentProcessed;
use App\Events\OrderShipped;
use App\Listeners\UpdateOrderStatus;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $listen = [
        OrderCreated::class => [
            UpdateOrderStatus::class,
        ],
        PaymentProcessed::class => [
            UpdateOrderStatus::class,
        ],
        OrderShipped::class => [
            UpdateOrderStatus::class,
        ],
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}