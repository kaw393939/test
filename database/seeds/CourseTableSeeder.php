<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Course::class, 1)->create()->each(function ($course) {
            $user = App\User::inRandomOrder()->first();
            $course->addOwner($user);

            $users = App\User::take(2)->get();
            foreach ($users as $user) {
                $course->addMember($user);
            }

        });


    }
}
