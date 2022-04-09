<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use App\Mail\ContactAdminMail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendContactNotification
{
    /**
     * Handle the event.
     *
     * @param  ContactCreated  $event
     * @return void
     */
    public function handle(ContactCreated $event)
    {
        $contact = $event->contact;
        // Send mail to user
         Mail::to($contact->email)->send(new ContactMail($contact));
         // Send mail to admin
         Mail::to(env('MAIL_FROM_ADDRESS', 'info@contentwritingservice.ae'))->send(new ContactAdminMail($contact));

        // Notification::send($contact->email, new ContactNotification($contact));
        // Notification::route('mail', $contact->email)->notify(new ContactNotification($contact));
        // Notification::send(env('MAIL_FROM_ADDRESS', 'info@contentwritingservice.ae'), new ContactAdminMail($contact));
    }
}
