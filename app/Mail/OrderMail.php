<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
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
        $email = $this->markdown('email.order')->subject('Cheap CV Writing Order Confirmation')->with(["data" => $this->data]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;

        // return $this->markdown('email.order')
        //     ->subject('Order Confirmation')
        //     ->attachFromStorage('/public/uploads/61b73e62a4ecc_1639399010_10.1525_9780520312104-fm.pdf', 'name.pdf', [
        //         'mime' => 'application/pdf'
        //     ])
        //     ->with(["data" => $this->data]);
    }
}
