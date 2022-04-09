<?php

namespace App\Mail;

use App\OrderQuery;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderQueryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $query;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(OrderQuery $orderQuery)
    {
        $this->query = $orderQuery;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.query')->with(['query' => $this->query ]);
    }
}
