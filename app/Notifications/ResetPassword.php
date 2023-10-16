<?php

namespace App\Notifications;

use App\Mail\TesMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPassword extends Notification
{
    use Queueable;
    public $url, $username;
    /**
     * Create a new notification instance.
     */
    public function __construct($url, $user)
    {
        $this->url = $url;
        $this->username = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->from(config('mail.from.address'))
                    ->subject('Verifikasi reset password')
                    ->markdown('emails.tesmail', ['url'=>$this->url,'username'=>$this->username ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
