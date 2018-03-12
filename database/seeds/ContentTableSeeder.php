<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Content::class, 100)->create()->each(function ($content) {
            $user = App\User::inRandomOrder()->first();
            $content->members()->attach($user, ['role_id' => 1]);
        });
    }
}
