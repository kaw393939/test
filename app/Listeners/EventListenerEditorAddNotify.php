<?php

namespace App\Listeners;

use App\Events\EventEditorAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListenerEditorAddNotify
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
     * @param  EventEditorAdded  $event
     * @return void
     */
    public function handle(EventEditorAdded $event)
    {
        //
    }
}
