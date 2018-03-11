<?php

namespace App\Listeners;

use App\Events\CourseOwnerAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\CourseNotification;

class CourseCreationNotify
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
     * @param  CourseOwnerAdded  $event
     * @return void
     */
    public function handle(CourseOwnerAdded $event)
    {
        $user = $event->user;
        $course = $event->course;
        $user->notify(new CourseNotification($course));
    }
}
