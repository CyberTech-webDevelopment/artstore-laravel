<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colors')->delete();

        \DB::table('colors')->insert(array(
            0 =>
                array(
                    'id'=>1,
                    'color_name_am'=>'Բեժ',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            1 =>
                array(
                    'id'=>2,
                    'color_name_am'=>'Սև',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            2 =>
                array(
                    'id'=>3,
                    'color_name_am'=>'Կապույտ',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            3 =>
                array(
                    'id'=>4,
                    'color_name_am'=>'Դարչնագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            4 =>
                array(
                    'id'=>5,
                    'color_name_am'=>'Մոխրագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            5 =>
                array(
                    'id'=>6,
                    'color_name_am'=>'Կանաչ',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            6 =>
                array(
                    'id'=>7,
                    'color_name_am'=>'Նարնջագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            7 =>
                array(
                    'id'=>8,
                    'color_name_am'=>'Վարդագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            8 =>
                array(
                    'id'=>9,
                    'color_name_am'=>'Մանուշակագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            9 =>
                array(
                    'id'=>10,
                    'color_name_am'=>'Կարմիր',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            10 =>
                array(
                    'id'=>11,
                    'color_name_am'=>'Սպիտակ',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            11 =>
                array(
                    'id'=>12,
                    'color_name_am'=>'Դեղին',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            12 =>
                array(
                    'id'=>13,
                    'color_name_am'=>'Պաստելային գույներ',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            13 =>
                array(
                    'id'=>14,
                    'color_name_am'=>'Բրոնզագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            14 =>
                array(
                    'id'=>15,
                    'color_name_am'=>'Պղնձագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            15 =>
                array(
                    'id'=>16,
                    'color_name_am'=>'Ոսկեգույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            16 =>
                array(
                    'id'=>17,
                    'color_name_am'=>'Արծաթագույն',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            17 =>
                array(
                    'id'=>18,
                    'color_name_am'=>'Վարդագույն ոսկի',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            18 =>
                array(
                    'id'=>19,
                    'color_name_am'=>'Խառը',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),
            19 =>
                array(
                    'id'=>20,
                    'color_name_am'=>'Այլ',
                    'color_name_ru'=>'',
                    'color_name_en'=>'',
                    'color_code'=>''
                ),

        ));
    }
}
