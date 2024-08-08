<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function sendTestMail()
    {
        $to_email = '2123300393@soy.utj.edu.mx';

        Mail::raw('Este es un correo de prueba desde Laravel.', function ($message) use ($to_email) {
            $message->to($to_email)
                    ->subject('Correo de Prueba');
        });

        return 'Correo de prueba enviado';
    }
}
