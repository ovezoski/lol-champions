<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChampionCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $champion;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($champion)
    {
      $this->champion = $champion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('ChampionCreated');
    }
}
