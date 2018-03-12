<?php namespace App\Traits;

use App\Content;
use App\Event;
use App\Group;
use App\Course;
use App\User;


trait EntityResources
{
    public function contentResources()
    {
        return $this->morphedByMany(Content::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }
    public function eventResources()
    {
        return $this->morphedByMany(Event::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function groupResources()
    {
        return $this->morphedByMany(Group::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function courseResources()
    {
        return $this->morphedByMany(Course::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }

    public function userResources()
    {
        return $this->morphedByMany(User::class, 'entity', 'entity_resources', 'entity_id', 'resource_id')->withTimestamps();
    }
}