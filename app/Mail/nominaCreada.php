<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class nominaCreada extends Mailable
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
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Nomina Creada',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.nomina',
        );
    }
    public function build()
    {
        return $this->markdown('emails.nomina')
                    ->subject('Nómina Generada')
                    ->attachData($this->pdf->output(), 'nomina.pdf', [
                        'mime' => 'application/pdf',
                    ])
                    ->with('empleado', $this->empleado);
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
