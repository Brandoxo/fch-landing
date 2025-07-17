<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\EventContactMailRequest;
use App\Http\Requests\Front\ContactMailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventContactMail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    private $contactEmail;
    private $eventContactEmail;
    private $ContactMails;

    public function __construct()
    {
        $this->ContactMails[] = 'info@fch-hotels.com';
        $this->ContactMails[] = 'desarrollo.software@pcbtroniks.com';
    }

    public function sendContactEmail(ContactMailRequest $request)
    {
        $data = $request->validated();

        Mail::to($this->ContactMails)->send(new ContactMail($data));

        return redirect()->back()->with('success', 'El mensaje se ha enviado correctamente');
    }

    public function sendEventContactEmail(EventContactMailRequest $request)
    {
        $data = $request->validated();

        Mail::to($this->eventContactEmail)->send(new EventContactMail($data));

        return redirect()->back()->with('success', 'El mensaje se ha enviado correctamente');
    }
}
