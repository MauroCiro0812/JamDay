<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductoSelected implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $producto;

    public function __construct($producto)
    {
        $this->producto = $producto->toArray(); // Convertir el modelo del producto a un array
    }

    public function broadcastOn()
    {
        return new PresenceChannel('producto');
    }
}
