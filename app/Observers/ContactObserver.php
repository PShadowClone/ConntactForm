<?php

namespace App\Observers;

use App\Http\Events\ContactUsEvent;
use App\Models\ContactUs;

class ContactObserver
{
    /**
     * Handle the contact us "created" event.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return void
     */
    public function created(ContactUs $contactUs)
    {
        event(new ContactUsEvent($contactUs));
    }

    /**
     * Handle the contact us "updated" event.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return void
     */
    public function updated(ContactUs $contactUs)
    {
        //
    }

    /**
     * Handle the contact us "deleted" event.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return void
     */
    public function deleted(ContactUs $contactUs)
    {
        //
    }

    /**
     * Handle the contact us "restored" event.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return void
     */
    public function restored(ContactUs $contactUs)
    {
        //
    }

    /**
     * Handle the contact us "force deleted" event.
     *
     * @param  \App\Models\ContactUs $contactUs
     * @return void
     */
    public function forceDeleted(ContactUs $contactUs)
    {
        //
    }
}
