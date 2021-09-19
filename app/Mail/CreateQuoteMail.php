<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_data, $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->email_data = $request;
        $this->file = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $beautymail = app()->make( \Snowfire\Beautymail\Beautymail::class);

        return $this->subject('Cotización DexData Expert')
                        ->from('info@reportes.com', 'soporte')
                        ->to($this->email_data['email'], $this->email_data['name'])
                        ->with('name', $this->email_data['name'])
                        ->with('password', $this->email_data['password'])
                        ->with('email', $this->email_data['email'])
                        ->view('emails.createquote', $beautymail->getData())
                        ->attach( public_path('registers_img\\'.$this->file));
    }
}
