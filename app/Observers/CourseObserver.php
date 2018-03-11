<?php

namespace App\Observers;

use App\Course;
use App\Notifications\UserWelcome;

class CourseObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User $user
     * @return void
     */
    public function created(Course $course)
    {


        //$user->notify(new UserWelcome());
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  \App\User $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }
}