<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: "valen@valen.vexel.my.id",
            subject: $this->data['subject']
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'sent',
            with: [
                'name' => $this->data['name'],
                'content' => $this->data['content'] ?? ''
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}