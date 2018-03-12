<?php

use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('channels')->insert([
            'id' => 1,
            'name' => 'database',
        ]);
        DB::table('channels')->insert([
            'id' => 2,
            'name' => 'mail',
        ]);
    }
}
