<?php

namespace App\Listeners;

use App\Events\SubscriberAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListenerSubscriberAddNotify
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
     * @param  SubscriberAdded  $event
     * @return void
     */
    public function handle(SubscriberAdded $event)
    {
        //
    }
}
