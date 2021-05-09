<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public $path;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $path)
    {
        $this->data = $data;
        $this->path = $path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): JobApplicationMail
    {
//        dd($this->path);
        return $this->from(MAIL_SENDER)
            ->subject('New Job Application')
            ->view('mails.application')
            ->attachFromStorage($this->path);
    }
}
