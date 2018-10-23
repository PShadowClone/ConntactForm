<?php

namespace App\Http\Linsteners;

use App\Http\Events\ContactUsEvent;
use App\Mail\ContactMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendUserEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactUsEvent $event
     * @return void
     */
    public function handle(ContactUsEvent $event)
    {
        Mail::to($event->contactUs)->send(new ContactMail($event->contactUs));
    }
}
