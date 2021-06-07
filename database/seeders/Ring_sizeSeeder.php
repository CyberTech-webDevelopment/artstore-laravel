<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Ring_sizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ring_sizes')->delete();

        \DB::table('ring_sizes')->insert(array(
            0 =>
                array(
                    'id'=>1,
                    'size'=>12
                ),
            1 =>
                array(
                    'id'=>2,
                    'size'=>12.5
                ),
            2 =>
                array(
                    'id'=>3,
                    'size'=>13
                ),
            3 =>
                array(
                    'id'=>4,
                    'size'=>13.5
                ),
            4 =>
                array(
                    'id'=>5,
                    'size'=>14
                ),
            5 =>
                array(
                    'id'=>6,
                    'size'=>14.5
                ),
            6 =>
                array(
                    'id'=>7,
                    'size'=>15
                ),
            7 =>
                array(
                    'id'=>8,
                    'size'=>15.5
                ),
            8 =>
                array(
                    'id'=>9,
                    'size'=>16
                ),
            9 =>
                array(
                    'id'=>10,
                    'size'=>16.5
                ),
            10 =>
                array(
                    'id'=>11,
                    'size'=>17
                ),
            11 =>
                array(
                    'id'=>12,
                    'size'=>17.5
                ),
            12 =>
                array(
                    'id'=>13,
                    'size'=>18
                ),
            13 =>
                array(
                    'id'=>14,
                    'size'=>18.5
                ),
            14 =>
                array(
                    'id'=>15,
                    'size'=>19
                ),
            15 =>
                array(
                    'id'=>16,
                    'size'=>19.5
                ),
            16 =>
                array(
                    'id'=>17,
                    'size'=>20
                ),
            17 =>
                array(
                    'id'=>18,
                    'size'=>20.5
                ),
            18 =>
                array(
                    'id'=>19,
                    'size'=>21
                ),
            19 =>
                array(
                    'id'=>20,
                    'size'=>21.5
                ),
            20 =>
                array(
                    'id'=>21,
                    'size'=>22
                ),

        ));
    }
}
