<?php

namespace Modules\Orders\Listeners;

use Illuminate\Support\Facades\Log;
use Modules\Orders\Events\OrderCreated;

class LogOrderCreated
{
    public function handle(OrderCreated $event): void
    {
        Log::info('Order created', [
            'order_number' => $event->order->order_number,
            'total_amount' => $event->order->total_amount,
            'items' => $event->order->items->count(),
        ]);
    }
}
