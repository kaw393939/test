<?php

namespace App\Listeners;

use App\Events\EventOwnerAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListenerOwnerAddNotify
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
     * @param  EventOwnerAdded  $event
     * @return void
     */
    public function handle(EventOwnerAdded $event)
    {
        //
    }
}
