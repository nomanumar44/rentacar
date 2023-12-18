<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TokenUpdates implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
   
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $tokens;
    public function __construct($tokens)
    {
        $this->tokens = $tokens;
    }

    public function broadcastWith()
    {
         
        return  ['tokens'=>$this->tokens];
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('tokens');
    }
}
