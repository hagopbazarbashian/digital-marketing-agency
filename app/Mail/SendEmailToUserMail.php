<?php

// app/Mail/SampleEmail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailToUserMail extends Mailable
{
    use Queueable, SerializesModels;
    // public $subject, $body;
    public $sendemail;

    public function __construct($sendemail)
    { 
        $this->sendemail = $sendemail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Developer Smart Support')->view('emails.sendemailtouser')->with([
            'email'=>$this->sendemail->email,
            'title'=>$this->sendemail->title,
            'body'=>$this->sendemail->body
        ]);
    }
}
