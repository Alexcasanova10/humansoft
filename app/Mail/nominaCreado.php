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

     public $empleado;
    public $pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($empleado, $pdf)
    {
        $this->empleado = $empleado;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.nomina')
        ->subject('Nómina de Empleado')
        ->attachData($this->pdf, 'nomina.pdf', [
            'mime' => 'application/pdf',
        ]);
    }
}
