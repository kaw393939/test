<?php namespace App\Traits;

use App\Content;
use App\Event;
use App\Group;
use App\Course;
use App\User;
use App\Events\EventOwnerAdded;
use App\Events\EventEditorAdded;
use App\Events\EventMemberAdded;
use App\Events\EventSubscriberAdded;

trait Entity
{
    public function members()
    {
        return $this->morphToMany(User::class, 'entity', 'members', 'entity_id', 'user_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->morphedByMany(Group::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }

    public function events()
    {
        return $this->morphedByMany(Event::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }

    public function courses()
    {
        return $this->morphedByMany(Course::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }

    public function content()
    {
        return $this->morphedByMany(Content::class, 'entity', 'members', 'user_id', 'entity_id')->withTimestamps();
    }

    public function addOwner(User $user)
    {
        $roleID = 1;
        $this->members()->attach($user, ['role_id' => $roleID]);
        event(new EventOwnerAdded($this, $user));
    }

    public function addEditor(User $user)
    {
        $roleID = 2;
        $this->members()->attach($user, ['role_id' => $roleID]);
        event(new EventEditorAdded($this, $user));
    }

    public function addMember(User $user)
    {
        $roleID = 3;
        $this->members()->attach($user, ['role_id' => $roleID]);
        event(new EventMemberAdded($this, $user));
    }

    public function addSubscriber(User $user)
    {
        $roleID = 4;
        $this->members()->attach($user, ['role_id' => $roleID]);
        event(new EventSubscriberAdded($this, $user));
    }
}