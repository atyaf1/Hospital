<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class send_notification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */


    public $user_name;
    public $description;
    public $birthday;
    public $date;
    public $time;


    public function __construct($data = [])
    {
        $this->user_name   = $data['user_name'];
        $this->description = $data['description'];
        $this->birthday    = $data['birthday'];
        $this->date        = date("Y-m-d", strtotime(Carbon::now()));
        $this->time        = date("h:i A", strtotime(Carbon::now()));
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ('new-notification');
    }
}
