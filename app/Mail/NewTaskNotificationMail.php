<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewTaskNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
         $this->email_data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $beautymail = app()->make( \Snowfire\Beautymail\Beautymail::class);


        return $this->subject('Actividad creada en DexData Expert')
                        ->from('info@reportes.com', 'soporte')
                        ->to($this->email_data['correo_tecnico'], $this->email_data['tecnico'])
                        ->with('data', $this->email_data)
                        ->view('emails.newtask', $beautymail->getData());
    }
}
