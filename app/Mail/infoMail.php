<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class infoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('minhnhat14713@gmail.com','Khách hàng mới')
                    ->view('emails.infoMail')
                    ->subject('Website có thông tin khách hàng mới');
    }
}
