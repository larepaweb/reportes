<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_data)
    {
        $this->email_data = $email_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $beautymail = app()->make( \Snowfire\Beautymail\Beautymail::class);

        return $this->subject('Bienvenidos a DexData Expert')
                        ->from('info@reportes.com', 'soporte')
                        ->to($this->email_data['email'], $this->email_data['name'])
                        ->with('name', $this->email_data['name'])
                        ->with('password', $this->email_data['password'])
                        ->with('email', $this->email_data['email'])
                        ->view('emails.welcome', $beautymail->getData());

    }
}
