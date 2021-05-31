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
                    'dec_material_am'=>'Պլատին',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Platinum'
                ),
            1 =>
                array(
                    'id'=>2,
                    'dec_material_am'=>'Դեղին ոսկի',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Yellow Gold'
                ),
            2 =>
                array(
                    'id'=>3,
                    'dec_material_am'=>'Սպիտակ ոսկի',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'White Gold'
                ),
            3 =>
                array(
                    'id'=>4,
                    'dec_material_am'=>'Վարդագույն ոսկի',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Rose Gold'
                ),
            4 =>
                array(
                    'id'=>5,
                    'dec_material_am'=>'Ոսկեջրած արծաթ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Gold Plated Silver'
                ),
            5 =>
                array(
                    'id'=>6,
                    'dec_material_am'=>'Բարձր հարգի արծաթ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Sterling Silver'
                ),
            6 =>
                array(
                    'id'=>7,
                    'dec_material_am'=>'Արծաթ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Silver'
                ),
            7 =>
                array(
                    'id'=>8,
                    'dec_material_am'=>'Արծաթաջրած',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Silver Plated'
                ),
            8 =>
                array(
                    'id'=>9,
                    'dec_material_am'=>'Ազնիվ մետաղների համադրություն',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>''
                ),
            9 =>
                array(
                    'id'=>10,
                    'dec_material_am'=>'Չժանգոտվող պողպատ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Stainless Steel'
                ),
            10 =>
                array(
                    'id'=>11,
                    'dec_material_am'=>'Պղինձ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Copper'
                ),
            11 =>
                array(
                    'id'=>12,
                    'dec_material_am'=>'Բրոնզ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Bronze'
                ),
            12 =>
                array(
                    'id'=>13,
                    'dec_material_am'=>'Արույր',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Brass'
                ),
            13 =>
                array(
                    'id'=>14,
                    'dec_material_am'=>'Ռոդիում',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Rhodium'
                ),
            14 =>
                array(
                    'id'=>15,
                    'dec_material_am'=>'Ռոդիումապատ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Rhodium Plated'
                ),
            15 =>
                array(
                    'id'=>16,
                    'dec_material_am'=>'Պալադիում',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Palladium'
                ),
            16 =>
                array(
                    'id'=>17,
                    'dec_material_am'=>'Տիտան',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Titanium'
                ),
            17 =>
                array(
                    'id'=>18,
                    'dec_material_am'=>'Կոբալտ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Cobalt'
                ),
            18 =>
                array(
                    'id'=>19,
                    'dec_material_am'=>'Վոլֆրամ',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>'Tungsten'
                ),
            19 =>
                array(
                    'id'=>20,
                    'dec_material_am'=>'Ոչ մետաղական',
                    'dec_material_ru'=>'',
                    'dec_material_en'=>''
                ),

        ));
    }
}
