<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmReservation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $event;
    public $ticket;

    public function __construct($event, $ticket)
    {
        $this->event = $event;
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->subject('Confirmation de réservation')
                    ->attach(storage_path('app/public/' . $this->ticket . '' . '.pdf'), [
                        'mime' => 'application/pdf'
                    ])
                    ->markdown('emails.confirm', [
                        'event' => $this->event,
                        'ticket' => storage_path('app/public/' . $this->ticket . '' . '.pdf')
                    ]);
    }
}
