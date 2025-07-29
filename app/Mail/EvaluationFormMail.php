<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class EvaluationFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $isConfirmation;

    public function __construct($formData, $isConfirmation = false)
    {
        $this->formData = $formData;
        $this->isConfirmation = $isConfirmation;
        
        Log::info('📧 Construction de l\'email', [
            'type' => $isConfirmation ? 'confirmation' : 'admin',
            'destinataire' => $formData['email'] ?? 'inconnu'
        ]);
    }

    /**
     * ✅ CORRECTION LARAVEL 11: Nouvelle méthode envelope()
     */
    public function envelope(): Envelope
    {
        if ($this->isConfirmation) {
            return new Envelope(
                subject: 'Confirmation de votre évaluation - Formation Informatique',
            );
        }
        
        return new Envelope(
            subject: 'Nouvelle évaluation reçue - ' . ($this->formData['nom'] ?? 'Nom inconnu'),
        );
    }

    /**
     * ✅ CORRECTION LARAVEL 11: Nouvelle méthode content()
     */
    public function content(): Content
    {
        if ($this->isConfirmation) {
            return new Content(
                view: 'emails.evaluation-confirmation',
                with: ['data' => $this->formData]
            );
        }
        
        return new Content(
            view: 'emails.evaluation-admin',
            with: ['data' => $this->formData]
        );
    }

    /**
     * ✅ SUPPRIMÉ: La méthode build() n'est plus nécessaire dans Laravel 11
     */
}
