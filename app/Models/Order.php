<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent;

class Order extends Model
{
    use HasFactory;



    protected $fillable = ['status'];

    public function getOrderHistory()
    {
        
        $events = EloquentStoredEvent::where('aggregate_uuid', $this->id)->get();

        $history = [];
        foreach ($events as $event) {
            $eventData = $event->event;
            $history[] = [
                'event' => get_class($eventData),
                'data' => $eventData,
                'occurred_at' => $event->created_at,
            ];
        }

        return $history;
    }
}