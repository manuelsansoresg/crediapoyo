<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SolicitudMail extends Mailable
{
    use Queueable, SerializesModels;
    public $request;
    public $state;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $state)
    {
        //
        $this->request = $request;
        $this->state = $state;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.solicitud')->subject('Solicitud de crédito ')->from($this->request['correo']);
    }
}
