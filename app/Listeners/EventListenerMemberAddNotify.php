<?php

namespace App\Listeners;

use App\Events\EventMemberAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListenerMemberAddNotify
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
     * @param  EventMemberAdded  $event
     * @return void
     */
    public function handle(EventMemberAdded $event)
    {
        //
    }
}
