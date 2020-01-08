<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PopulateUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i<10; $i++){
            DB::table('users')->insert([
                'name' => Str::random(12),
                'email' => Str::random(12).'@gmail.com',
                'password' => app('hash')->make('mypass')
            ]);
        }
    }
}
