<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {   
        \Log::info('Enviando correo');

        $data = $request->all();

        //Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'cp' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',

        ]);

        //Enviar el correo a tu dirección de correo electrónico
        Mail::to('info@fch-hotels.com')->send(new ContactMessage($validated));

        return redirect()->back()->with('success', 'Nos pondremos en contacto contigo a la brevedad.');
    }
}
