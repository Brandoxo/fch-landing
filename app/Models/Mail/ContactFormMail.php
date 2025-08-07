<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
Use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $subject = 'Contacto desde la web';

    public function __construct($data)
    {
        $this-> data = $data;
    }

    public function build()
    {
        return $this->view('mails.form');
    }
}