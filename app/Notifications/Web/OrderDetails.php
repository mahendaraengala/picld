<?php

namespace App\Notifications\Web;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderDetails extends Notification
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
        return (new MailMessage)
                    ->subject('Order Details')
                    ->greeting('Order Details ')
                    ->line('Order Ref. No. : '. $this->data['ref_no'])
                    ->line('Name : '. $this->data['name'])
                    ->line('Email Address : '. $this->data['email'])
                    ->line('Phone : '. $this->data['phone'])
                    ->line('Status : '. $this->data['status'])
                    ->line('Payment Type : '. $this->data['payment_type'])
                    ->line('Payment Status : '. $this->data['payment_status'])
                    ->line('Gross Amount : '. $this->data['gross_amount'])
                    ->line('OTC Amount : '. $this->data['otc_amount'])
                    ->line('Convenience Amount : '. $this->data['convenience_amount'])
                    ->line('GST Amount : '. $this->data['gst_amount'])
                    ->line('Total Amount : '. $this->data['total_amount'])
                    ->line('Order Date : '. date('d d/m/Y', strtotime($this->data['created_at'])));
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
