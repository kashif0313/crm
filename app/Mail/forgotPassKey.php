<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class forgotPassKey extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private $linkToken ,private $userName)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Forgot Pass Key',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $link = "http://localhost:8000/resetPassword?userToken=$this->linkToken";
        //$link = "http://localhost:8000/resetPassword";
        return new Content(
            view: 'forgotPasswordMailView',
            with: ['link' => $link ,'userName'=> $this->userName],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
