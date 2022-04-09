<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $attachmentsPath;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request, $files)
    {
        $this->data = $request->all();
        $this->attachmentsPath = $files;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('email.order-admin')->with(["data" => $this->data]);

        $email = $this->markdown('email.order-admin')->subject('Order Placement')->with(["data" => $this->data]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;
    }
}
