<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;

    public function __construct($name, $content)
    {
        $this->name = $name;
        $this->content = $content;
    }

    public function build()
    {
        return $this->subject('Inquiry Received')
                    ->view('email.contact_received')->with(['name' => $this->name, 'content'=>$this->content]);
    }
}