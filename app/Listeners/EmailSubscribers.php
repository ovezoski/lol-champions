<?php

namespace App\Listeners;

use App\Events\ChampionCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailSubscribers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewChampionCreated  $event
     * @return void
     */
    public function handle(\App\Events\ChampionCreated $event)
    {
      $champion = $event->champion;

      \Mail::to(\App\Subscriber::get())->send(new \App\Mail\ChampionCreated($champion));
    }
}
