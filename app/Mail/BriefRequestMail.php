<?php

namespace App\Mail;

use App\Models\Bref;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class BriefRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $brief;

    /**
     * Create a new message instance.
     */
    public function __construct(Bref $brief)
    {
        $this->brief = $brief;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '📘 Nouvelle demande de brief – École ' . $this->brief->ecole,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.brief_request',
            with: [
                'brief' => $this->brief
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
