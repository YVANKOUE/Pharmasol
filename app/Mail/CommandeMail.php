<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommandeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $message; 
    public $quantite;
    public $produit;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $quantite, $produit)
    {
        $this->message = $message;
        $this->quantite = $quantite;
        $this->produit = $produit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.commande');
    }
}
