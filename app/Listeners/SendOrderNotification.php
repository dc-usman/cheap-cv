<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(OrderCreated $event)
    {
        $order = $event->order;

        // Send mail to user
        // Mail::to($order->email)->send(new OrderMail($order));
        // Send mail to user
        // Mail::to(env('MAIL_FROM_ADDRESS', 'info@contentwritingservice.ae'))->send(new OrderAdminMail($order));

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }
}
