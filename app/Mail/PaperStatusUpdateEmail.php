<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaperStatusUpdateEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $status;
    public function __construct($request)
    {
        $this->status = $request->status;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Paper Status Update Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if ($this->status == 2) :
            return new Content(
                view: 'email.paper-hold',
            );
        endif;
        if ($this->status == 3) :
            return new Content(
                view: 'email.paper-approved',
            );
        endif;
        if ($this->status == 4) :
            return new Content(
                view: 'email.paper-rejected',
            );
        endif;
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
