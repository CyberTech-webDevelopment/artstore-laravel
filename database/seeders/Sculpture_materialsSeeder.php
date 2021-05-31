<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Sculpture_materialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sculpture_materials')->delete();

        \DB::table('sculpture_materials')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'sculpture_material_am' => 'Մետաղ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Metal'
                ),
            1 =>
                array(
                    'id' => 2,
                    'sculpture_material_am' => 'Փայտ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Wood'
                ),
            2 =>
                array(
                    'id' => 3,
                    'sculpture_material_am' => 'կրերամիկական',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Ceramic'
                ),
            3 =>
                array(
                    'id' => 4,
                    'sculpture_material_am' => 'Կավ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Clay'
                ),
            4 =>
                array(
                    'id' => 5,
                    'sculpture_material_am' => 'Բրոնզե',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Bronze'
                ),
            5 =>
                array(
                    'id' => 6,
                    'sculpture_material_am' => 'Քար',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Stone'
                ),
            6 =>
                array(
                    'id' => 7,
                    'sculpture_material_am' => 'Պողպատ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Steel'
                ),
            7 =>
                array(
                    'id' => 8,
                    'sculpture_material_am' => 'Ակրիլային',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Acrilic'
                ),
            8 =>
                array(
                    'id' => 9,
                    'sculpture_material_am' => 'Ապակե',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Glass'
                ),
            9 =>
                array(
                    'id' => 10,
                    'sculpture_material_am' => 'Պլաստիկ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Plastic'
                ),
            10 =>
                array(
                    'id' => 11,
                    'sculpture_material_am' => 'Ծեփած',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Plaster'
                ),
            11 =>
                array(
                    'id' => 12,
                    'sculpture_material_am' => 'Մարմար',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Marble'
                ),
            12 =>
                array(
                    'id' => 13,
                    'sculpture_material_am' => 'Խեցեգործություն',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Pottery'
                ),
            13 =>
                array(
                    'id' => 14,
                    'sculpture_material_am' => 'Պապյե մաշե',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Paper mache'
                ),
            14 =>
                array(
                    'id' => 15,
                    'sculpture_material_am' => 'Մոմ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Wax'
                ),
            15 =>
                array(
                    'id' => 16,
                    'sculpture_material_am' => 'Փայտի վրա փորագրություն',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Woodcut'
                ),
            16 =>
                array(
                    'id' => 17,
                    'sculpture_material_am' => 'Գրանիտ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Grantie'
                ),
            17 =>
                array(
                    'id' => 18,
                    'sculpture_material_am' => 'Խճանկար',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Mosaic'
                ),
            18 =>
                array(
                    'id' => 19,
                    'sculpture_material_am' => 'Փայտանյութ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Timber'
                ),
            19 =>
                array(
                    'id' => 20,
                    'sculpture_material_am' => 'Ռետինե',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Rubber'
                ),
            20 =>
                array(
                    'id' => 21,
                    'sculpture_material_am' => 'Գիպս',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Gesso'
                ),
            21 =>
                array(
                    'id' => 22,
                    'sculpture_material_am' => 'Թանկարժեք նյութ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Precious Materials'
                ),
            22 =>
                array(
                    'id' => 23,
                    'sculpture_material_am' => 'Փորագրություն',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Etching'
                ),
            23 =>
                array(
                    'id' => 24,
                    'sculpture_material_am' => 'Տրաֆարետ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Stencil'
                ),
            24 =>
                array(
                    'id' => 25,
                    'sculpture_material_am' => 'Մոմաներկ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => 'Encaustic'
                ),
            25 =>
                array(
                    'id' => 26,
                    'sculpture_material_am' => 'Այլ',
                    'sculpture_material_ru' => '',
                    'sculpture_material_en' => ''
                ),

        ));
    }
}
