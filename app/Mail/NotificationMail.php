<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $body;
    public $filePath;
    /**
     * Create a new message instance.
     */
    public function __construct($subject, $body, $filePath)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->filePath = $filePath;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        $email = $this
            ->view('mail.notification')
            ->with([
                'subject' => $this->subject,
                'body' => $this->body,
            ]);

        if ($this->filePath && Storage::exists('public/' . $this->filePath)) {
            $email->attach(storage_path('app/public/' . $this->filePath));
        }

        return $email;
    }
}
