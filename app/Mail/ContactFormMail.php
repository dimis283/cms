<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    // Define explicit properties instead of a generic $data array
    public $name;
    public $email;
    public $messageContent; // Renamed to avoid conflict with Laravel's message() method

    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? 'No name provided';
        $this->email = $data['email'] ?? 'No email provided';
        $this->messageContent = $data['message'] ?? 'No message provided';
    }

    public function build()
    {
        return $this->from('test@test.com')
                   ->subject('New Contact Form Submission')
                   ->view('emails.contact');
    }
}