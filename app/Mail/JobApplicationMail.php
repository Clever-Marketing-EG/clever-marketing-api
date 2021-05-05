<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): JobApplicationMail
    {
        return $this->from(MAIL_SENDER)
            ->subject('New Job Application')
            ->view('mails.application')
            ->attachData($this->data['resume'], 'resume.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
