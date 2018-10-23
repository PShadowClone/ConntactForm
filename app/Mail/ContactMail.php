<?php

namespace App\Mail;

use App\Models\ContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     *
     * the content of message
     *
     * @var ContactUs
     */
    public $contactUs;

    /**
     * @var $ownerEmail
     */
    public $ownerEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactUs $contactUs, $ownerEmail = null)
    {
        $this->contactUs = $contactUs;
        $this->ownerEmail = $ownerEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $returnedEmail = $this;
        if ($this->ownerEmail)
            $returnedEmail->to($this->ownerEmail)->with('message', '"' . $this->contactUs->message . '", a message you have got from contact us form')->with('name', 'Owner');
        else
            $returnedEmail->with('message', 'your message has been received')->with('name', $this->contactUs->name);

        return $returnedEmail->markdown('emails.contactUs')
            ->subject($this->contactUs->subject);
    }
}
