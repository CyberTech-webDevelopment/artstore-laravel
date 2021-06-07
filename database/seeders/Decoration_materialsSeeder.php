<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Decoration_materialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('decoration_materials')->delete();

        \DB::table('decoration_materials')->insert(array(
            0 =>
                array(
                    'id'=>1,
                    'material_am'=>'Պլատին',
                    'material_ru'=>'',
                    'material_en'=>'Platinum'
                ),
            1 =>
                array(
                    'id'=>2,
                    'material_am'=>'Դեղին ոսկի',
                    'material_ru'=>'',
                    'material_en'=>'Yellow Gold'
                ),
            2 =>
                array(
                    'id'=>3,
                    'material_am'=>'Սպիտակ ոսկի',
                    'material_ru'=>'',
                    'material_en'=>'White Gold'
                ),
            3 =>
                array(
                    'id'=>4,
                    'material_am'=>'Վարդագույն ոսկի',
                    'material_ru'=>'',
                    'material_en'=>'Rose Gold'
                ),
            4 =>
                array(
                    'id'=>5,
                    'material_am'=>'Ոսկեջրած արծաթ',
                    'material_ru'=>'',
                    'material_en'=>'Gold Plated Silver'
                ),
            5 =>
                array(
                    'id'=>6,
                    'material_am'=>'Բարձր հարգի արծաթ',
                    'material_ru'=>'',
                    'material_en'=>'Sterling Silver'
                ),
            6 =>
                array(
                    'id'=>7,
                    'material_am'=>'Արծաթ',
                    'material_ru'=>'',
                    'material_en'=>'Silver'
                ),
            7 =>
                array(
                    'id'=>8,
                    'material_am'=>'Արծաթաջրած',
                    'material_ru'=>'',
                    'material_en'=>'Silver Plated'
                ),
            8 =>
                array(
                    'id'=>9,
                    'material_am'=>'Ազնիվ մետաղների համադրություն',
                    'material_ru'=>'',
                    'material_en'=>''
                ),
            9 =>
                array(
                    'id'=>10,
                    'material_am'=>'Չժանգոտվող պողպատ',
                    'material_ru'=>'',
                    'material_en'=>'Stainless Steel'
                ),
            10 =>
                array(
                    'id'=>11,
                    'material_am'=>'Պղինձ',
                    'material_ru'=>'',
                    'material_en'=>'Copper'
                ),
            11 =>
                array(
                    'id'=>12,
                    'material_am'=>'Բրոնզ',
                    'material_ru'=>'',
                    'material_en'=>'Bronze'
                ),
            12 =>
                array(
                    'id'=>13,
                    'material_am'=>'Արույր',
                    'material_ru'=>'',
                    'material_en'=>'Brass'
                ),
            13 =>
                array(
                    'id'=>14,
                    'material_am'=>'Ռոդիում',
                    'material_ru'=>'',
                    'material_en'=>'Rhodium'
                ),
            14 =>
                array(
                    'id'=>15,
                    'material_am'=>'Ռոդիումապատ',
                    'material_ru'=>'',
                    'material_en'=>'Rhodium Plated'
                ),
            15 =>
                array(
                    'id'=>16,
                    'material_am'=>'Պալադիում',
                    'material_ru'=>'',
                    'material_en'=>'Palladium'
                ),
            16 =>
                array(
                    'id'=>17,
                    'material_am'=>'Տիտան',
                    'material_ru'=>'',
                    'material_en'=>'Titanium'
                ),
            17 =>
                array(
                    'id'=>18,
                    'material_am'=>'Կոբալտ',
                    'material_ru'=>'',
                    'material_en'=>'Cobalt'
                ),
            18 =>
                array(
                    'id'=>19,
                    'material_am'=>'Վոլֆրամ',
                    'material_ru'=>'',
                    'material_en'=>'Tungsten'
                ),
            19 =>
                array(
                    'id'=>20,
                    'material_am'=>'Ոչ մետաղական',
                    'material_ru'=>'',
                    'material_en'=>''
                ),

        ));
    }
}
