<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Vladimir',
                    'email' => 'stepanyan281995@gmail.com',
                    'password' => '123456',
                    'is_verified' => 1
                ),
        ));
    }
}
