<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genders')->delete();

        DB::table('genders')->insert(array(

            0 =>
            array(
                'id' => 1,
                'name_am' => "Արական",
                'name_ru' => "Мужской",
                'name_en' => "Male",
            ),
        1 =>
            array(
                'id' => 2,
                'name_am' => "Իգական",
                'name_ru' => "Женьский",
                'name_en' => "Female",
            ),
        2 =>
            array(
                'id' => 3,
                'name_am' => "Երեխա",
                'name_ru' => "Ребенок",
                'name_en' => "Child",
            ),

        ));
    }
}
