<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function enrollment()
    {
        return $this->morphToMany(User::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }

    public function addOwner(User $user) {
        $roleID = 1;
        $course = $this;

        $this->enrollment()->attach($user, ['role_id' => $roleID]);
        event(new Events\CourseOwnerAdded($course, $user));

    }
    public function addMember(User $user) {
        $roleID = 2;
        $this->enrollment()->attach($user, ['role_id' => $roleID]);
        event(new Events\CourseMemberAdded($this));

    }

    public function content()
    {
        return $this->morphedByMany(Content::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function events()
    {
        return $this->morphedByMany(Event::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->morphedByMany(Group::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

}
