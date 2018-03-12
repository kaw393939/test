<?php

namespace App\Listeners;

use App\Events\CourseMemberAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\CourseNotification;

use App\Course;
class CourseMemberAddNotify
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
     * @param  CourseMemberAdded  $event
     * @return void
     */
    public function handle(CourseMemberAdded $event)
    {
        $course = $event->course;
        $members = $course->enrollment;

        foreach ($members as $user) {
           $user->notify(new CourseNotification($course));
        }




        //$user->notify(new CourseNotification($course));
    }
}
