<?php

use Illuminate\Database\Seeder;
use App\Channel;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 1)->create()->each(function ($user) {

            $channel1 = Channel::find(1);
            $channel2 = Channel::find(2);
            $user->channels()->attach($channel1,['active' => TRUE]);
            $user->channels()->attach($channel2,['active' => FALSE]);
            $channels = $user->channels;
            $user->profile()->save(factory(App\Profile::class)->make());

        });
    }

}