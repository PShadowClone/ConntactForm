<?php

namespace App\Http\Events;

use App\Models\ContactUs;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ContactUsEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var ContactUs
     */
    public $contactUs;


    /**
     * Create a new event instance.
     *
     * @param ContactUs $contactUs
     * @return void
     */
    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
    }
}
