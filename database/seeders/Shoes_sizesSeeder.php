<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Shoes_sizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('shoes_sizes')->delete();

        \DB::table('shoes_sizes')->insert(array(
            0 =>
                array(
                    'id'=>1,
                    'shoes_size'=>35
                ),
            1 =>
                array(
                    'id'=>2,
                    'shoes_size'=>35.5
                ),
            2 =>
                array(
                    'id'=>3,
                    'shoes_size'=>36
                ),
            3 =>
                array(
                    'id'=>4,
                    'shoes_size'=>36.5
                ),
            4 =>
                array(
                    'id'=>5,
                    'shoes_size'=>37
                ),
            5 =>
                array(
                    'id'=>6,
                    'shoes_size'=>37.5
                ),
            6 =>
                array(
                    'id'=>7,
                    'shoes_size'=>38
                ),
            7 =>
                array(
                    'id'=>8,
                    'shoes_size'=>38.5
                ),
            8 =>
                array(
                    'id'=>9,
                    'shoes_size'=>39
                ),
            9 =>
                array(
                    'id'=>10,
                    'shoes_size'=>39.5
                ),
            10 =>
                array(
                    'id'=>11,
                    'shoes_size'=>40
                ),
            11 =>
                array(
                    'id'=>12,
                    'shoes_size'=>40.5
                ),
            12 =>
                array(
                    'id'=>13,
                    'shoes_size'=>41
                ),
            13 =>
                array(
                    'id'=>14,
                    'shoes_size'=>41.5
                ),
            14 =>
                array(
                    'id'=>15,
                    'shoes_size'=>42
                ),
            15 =>
                array(
                    'id'=>16,
                    'shoes_size'=>42.5
                ),
            16 =>
                array(
                    'id'=>17,
                    'shoes_size'=>43
                ),
            17 =>
                array(
                    'id'=>18,
                    'shoes_size'=>43.5
                ),
            18 =>
                array(
                    'id'=>19,
                    'shoes_size'=>44
                ),
            19 =>
                array(
                    'id'=>20,
                    'shoes_size'=>44.5
                ),
            20 =>
                array(
                    'id'=>21,
                    'shoes_size'=>45
                ),
            21 =>
                array(
                    'id'=>22,
                    'shoes_size'=>45.5
                ),
            22 =>
                array(
                    'id'=>23,
                    'shoes_size'=>46
                ),
            23 =>
                array(
                    'id'=>24,
                    'shoes_size'=>46.5
                ),
            24 =>
                array(
                    'id'=>25,
                    'shoes_size'=>47
                ),
            25 =>
                array(
                    'id'=>26,
                    'shoes_size'=>47.5
                ),
            26 =>
                array(
                    'id'=>27,
                    'shoes_size'=>48
                ),
            27 =>
                array(
                    'id'=>28,
                    'shoes_size'=>48.5
                ),
            28 =>
                array(
                    'id'=>29,
                    'shoes_size'=>49
                ),
            29 =>
                array(
                    'id'=>30,
                    'shoes_size'=>49.5
                ),
            30 =>
                array(
                    'id'=>31,
                    'shoes_size'=>50
                ),


        ));
    }
}
