<?php

use Illuminate\Database\Seeder;

class ResourceEntityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($x = 0; $x <= 50; $x++) {

            $course = App\Course::inRandomOrder()->first();
            $group = App\Group::inRandomOrder()->first();
            $event = App\Event::inRandomOrder()->first();
            $content = App\Content::inRandomOrder()->first();

            $group->contentResources()->attach($content);
            $group->eventResources()->attach($event);

            $event->groupResources()->attach($group);
            $event->contentResources()->attach($content);

            $course->groupResources()->attach($group);
            $course->contentResources()->attach($content);
            $course->eventResources()->attach($event);
        }

    }
}
