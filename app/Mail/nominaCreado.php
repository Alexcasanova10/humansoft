<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class nominaCreado extends Mailable
{
    use Queueable, SerializesModels;

    public $nomina;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nomina)
    {
        $this->nomina = $nomina;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.nomina_created')
                    ->subject('Nueva Nómina Creada')
                    ->with([
                        'nomina' => $this->nomina,
                    ]);
    }
}
