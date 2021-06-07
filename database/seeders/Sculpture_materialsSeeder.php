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
                    'material_am' => 'Մետաղ',
                    'material_ru' => '',
                    'material_en' => 'Metal'
                ),
            1 =>
                array(
                    'id' => 2,
                    'material_am' => 'Փայտ',
                    'material_ru' => '',
                    'material_en' => 'Wood'
                ),
            2 =>
                array(
                    'id' => 3,
                    'material_am' => 'կրերամիկական',
                    'material_ru' => '',
                    'material_en' => 'Ceramic'
                ),
            3 =>
                array(
                    'id' => 4,
                    'material_am' => 'Կավ',
                    'material_ru' => '',
                    'material_en' => 'Clay'
                ),
            4 =>
                array(
                    'id' => 5,
                    'material_am' => 'Բրոնզե',
                    'material_ru' => '',
                    'material_en' => 'Bronze'
                ),
            5 =>
                array(
                    'id' => 6,
                    'material_am' => 'Քար',
                    'material_ru' => '',
                    'material_en' => 'Stone'
                ),
            6 =>
                array(
                    'id' => 7,
                    'material_am' => 'Պողպատ',
                    'material_ru' => '',
                    'material_en' => 'Steel'
                ),
            7 =>
                array(
                    'id' => 8,
                    'material_am' => 'Ակրիլային',
                    'material_ru' => '',
                    'material_en' => 'Acrilic'
                ),
            8 =>
                array(
                    'id' => 9,
                    'material_am' => 'Ապակե',
                    'material_ru' => '',
                    'material_en' => 'Glass'
                ),
            9 =>
                array(
                    'id' => 10,
                    'material_am' => 'Պլաստիկ',
                    'material_ru' => '',
                    'material_en' => 'Plastic'
                ),
            10 =>
                array(
                    'id' => 11,
                    'material_am' => 'Ծեփած',
                    'material_ru' => '',
                    'material_en' => 'Plaster'
                ),
            11 =>
                array(
                    'id' => 12,
                    'material_am' => 'Մարմար',
                    'material_ru' => '',
                    'material_en' => 'Marble'
                ),
            12 =>
                array(
                    'id' => 13,
                    'material_am' => 'Խեցեգործություն',
                    'material_ru' => '',
                    'material_en' => 'Pottery'
                ),
            13 =>
                array(
                    'id' => 14,
                    'material_am' => 'Պապյե մաշե',
                    'material_ru' => '',
                    'material_en' => 'Paper mache'
                ),
            14 =>
                array(
                    'id' => 15,
                    'material_am' => 'Մոմ',
                    'material_ru' => '',
                    'material_en' => 'Wax'
                ),
            15 =>
                array(
                    'id' => 16,
                    'material_am' => 'Փայտի վրա փորագրություն',
                    'material_ru' => '',
                    'material_en' => 'Woodcut'
                ),
            16 =>
                array(
                    'id' => 17,
                    'material_am' => 'Գրանիտ',
                    'material_ru' => '',
                    'material_en' => 'Grantie'
                ),
            17 =>
                array(
                    'id' => 18,
                    'material_am' => 'Խճանկար',
                    'material_ru' => '',
                    'material_en' => 'Mosaic'
                ),
            18 =>
                array(
                    'id' => 19,
                    'material_am' => 'Փայտանյութ',
                    'material_ru' => '',
                    'material_en' => 'Timber'
                ),
            19 =>
                array(
                    'id' => 20,
                    'material_am' => 'Ռետինե',
                    'material_ru' => '',
                    'material_en' => 'Rubber'
                ),
            20 =>
                array(
                    'id' => 21,
                    'material_am' => 'Գիպս',
                    'material_ru' => '',
                    'material_en' => 'Gesso'
                ),
            21 =>
                array(
                    'id' => 22,
                    'material_am' => 'Թանկարժեք նյութ',
                    'material_ru' => '',
                    'material_en' => 'Precious Materials'
                ),
            22 =>
                array(
                    'id' => 23,
                    'material_am' => 'Փորագրություն',
                    'material_ru' => '',
                    'material_en' => 'Etching'
                ),
            23 =>
                array(
                    'id' => 24,
                    'material_am' => 'Տրաֆարետ',
                    'material_ru' => '',
                    'material_en' => 'Stencil'
                ),
            24 =>
                array(
                    'id' => 25,
                    'material_am' => 'Մոմաներկ',
                    'material_ru' => '',
                    'material_en' => 'Encaustic'
                ),
            25 =>
                array(
                    'id' => 26,
                    'material_am' => 'Այլ',
                    'material_ru' => '',
                    'material_en' => ''
                ),

        ));
    }
}
