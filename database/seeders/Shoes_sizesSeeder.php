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
                    'size'=>35
                ),
            1 =>
                array(
                    'id'=>2,
                    'size'=>35.5
                ),
            2 =>
                array(
                    'id'=>3,
                    'size'=>36
                ),
            3 =>
                array(
                    'id'=>4,
                    'size'=>36.5
                ),
            4 =>
                array(
                    'id'=>5,
                    'size'=>37
                ),
            5 =>
                array(
                    'id'=>6,
                    'size'=>37.5
                ),
            6 =>
                array(
                    'id'=>7,
                    'size'=>38
                ),
            7 =>
                array(
                    'id'=>8,
                    'size'=>38.5
                ),
            8 =>
                array(
                    'id'=>9,
                    'size'=>39
                ),
            9 =>
                array(
                    'id'=>10,
                    'size'=>39.5
                ),
            10 =>
                array(
                    'id'=>11,
                    'size'=>40
                ),
            11 =>
                array(
                    'id'=>12,
                    'size'=>40.5
                ),
            12 =>
                array(
                    'id'=>13,
                    'size'=>41
                ),
            13 =>
                array(
                    'id'=>14,
                    'size'=>41.5
                ),
            14 =>
                array(
                    'id'=>15,
                    'size'=>42
                ),
            15 =>
                array(
                    'id'=>16,
                    'size'=>42.5
                ),
            16 =>
                array(
                    'id'=>17,
                    'size'=>43
                ),
            17 =>
                array(
                    'id'=>18,
                    'size'=>43.5
                ),
            18 =>
                array(
                    'id'=>19,
                    'size'=>44
                ),
            19 =>
                array(
                    'id'=>20,
                    'size'=>44.5
                ),
            20 =>
                array(
                    'id'=>21,
                    'size'=>45
                ),
            21 =>
                array(
                    'id'=>22,
                    'size'=>45.5
                ),
            22 =>
                array(
                    'id'=>23,
                    'size'=>46
                ),
            23 =>
                array(
                    'id'=>24,
                    'size'=>46.5
                ),
            24 =>
                array(
                    'id'=>25,
                    'size'=>47
                ),
            25 =>
                array(
                    'id'=>26,
                    'size'=>47.5
                ),
            26 =>
                array(
                    'id'=>27,
                    'size'=>48
                ),
            27 =>
                array(
                    'id'=>28,
                    'size'=>48.5
                ),
            28 =>
                array(
                    'id'=>29,
                    'size'=>49
                ),
            29 =>
                array(
                    'id'=>30,
                    'size'=>49.5
                ),
            30 =>
                array(
                    'id'=>31,
                    'size'=>50
                ),


        ));
    }
}
