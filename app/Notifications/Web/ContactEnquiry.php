<?php

namespace App\Notifications\Web;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactEnquiry extends Notification
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
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
        
        if (isset($this->data['document'])) {
            return (new MailMessage)
                    ->subject( config('app.name') . ' Contact Enquiry')
                    ->greeting('Contact Form Enquiry')
                    ->line('Name : '. $this->data['name'])
                    ->line('Phone : '. $this->data['phone'])
                    ->line('Email : '. $this->data['email'])
                    ->line('Company : '. $this->data['subject'])
                    ->line('Message : '. $this->data['message'])
                    ->attach( $this->data['document']->getRealPath(), [
                        'as' =>  $this->data['document']->getClientOriginalName(),
                        'mime' =>  $this->data['document']->getClientMimeType(),
                    ]);
        }
        else {
            return (new MailMessage)
                    ->subject( config('app.name') . ' Contact Enquiry')
                    ->greeting('Contact Form Enquiry')
                    ->line('Name : '. $this->data['name'])
                    ->line('Phone : '. $this->data['phone'])
                    ->line('Email : '. $this->data['email'])
                    ->line('Company : '. $this->data['subject'])
                    ->line('Message : '. $this->data['message']);
        }
        
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
