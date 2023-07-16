<?php

// app/Mail/SampleEmail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentEmail extends Mailable
{
    use Queueable, SerializesModels;
    // public $subject, $body;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Sample Email')->view('emails.appointment');
    }
}
