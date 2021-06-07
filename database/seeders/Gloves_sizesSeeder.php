<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Gloves_sizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('gloves_sizes')->delete();

        \DB::table('gloves_sizes')->insert(array(
            0 =>
                array(
                    'id'=>1,
                    'size'=>4
                ),
            1 =>
                array(
                    'id'=>2,
                    'size'=>4.5
                ),
            2 =>
                array(
                    'id'=>3,
                    'size'=>5
                ),
            3 =>
                array(
                    'id'=>4,
                    'size'=>5.5
                ),
            4 =>
                array(
                    'id'=>5,
                    'size'=>6
                ),
            5 =>
                array(
                    'id'=>6,
                    'size'=>6.5
                ),
            6 =>
                array(
                    'id'=>7,
                    'size'=>7
                ),
            7 =>
                array(
                    'id'=>8,
                    'size'=>7.5
                ),
            8 =>
                array(
                    'id'=>9,
                    'size'=>8
                ),
            9 =>
                array(
                    'id'=>10,
                    'size'=>8.5
                ),
            10 =>
                array(
                    'id'=>11,
                    'size'=>9
                ),
            11 =>
                array(
                    'id'=>12,
                    'size'=>9.5
                ),
            12 =>
                array(
                    'id'=>13,
                    'size'=>10
                ),
            13 =>
                array(
                    'id'=>14,
                    'size'=>10.5
                ),
            14 =>
                array(
                    'id'=>15,
                    'size'=>11
                ),
            15 =>
                array(
                    'id'=>16,
                    'size'=>11.5
                ),
            16 =>
                array(
                    'id'=>17,
                    'size'=>12
                ),


        ));

    }
}
