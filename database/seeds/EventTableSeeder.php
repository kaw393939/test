<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Event::class, 10)->create()->each(function ($event) {
            $user = App\User::inRandomOrder()->first();
            $event->members()->attach($user, ['role_id' => 1]);
        });
    }
}
