<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Cloths_sizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('cloths_sizes')->delete();

        \DB::table('cloths_sizes')->insert(array (
            0 =>
                array (
                    'id'=>1,
                    'c_size'=>'XXS'

                ),
            1 =>
                array (
                    'id'=>2,
                    'c_size'=>'XS'

                ),
            2 =>
                array (
                    'id'=>3,
                    'c_size'=>'SM'

                ),
            3 =>
                array (
                    'id'=>4,
                    'c_size'=>'MD'

                ),
            4 =>
                array (
                    'id'=>5,
                    'c_size'=>'LG'

                ),
            5 =>
                array (
                    'id'=>6,
                    'c_size'=>'XL'

                ),
            6 =>
                array (
                    'id'=>7,
                    'c_size'=>'2XL'
                ),
            7 =>
                array (
                    'id'=>8,
                    'c_size'=>'3XL'

                ),
            8 =>
                array (
                    'id'=>9,
                    'c_size'=>'4XL'

                ),
            9 =>
                array (
                    'id'=>10,
                    'c_size'=>'5XL'
                ),
            10 =>
                array (
                    'id'=>11,
                    'c_size'=>'6XL'

                ),
            11 =>
                array (
                    'id'=>12,
                    'c_size'=>'OS'

                ),

        ));
    }
}
