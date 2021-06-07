<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Photo_materialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('photo_materials')->delete();

        \DB::table('photo_materials')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'material_am' => 'Յուղաներկ',
                    'material_ru' => '',
                    'material_en' => 'Oil'
                ),
            1 =>
                array(
                    'id' => 2,
                    'material_am' => 'Ակրիլ',
                    'material_ru' => '',
                    'material_en' => ''
                ),
            2 =>
                array(
                    'id' => 3,
                    'material_am' => 'Ջրաներկ',
                    'material_ru' => '',
                    'material_en' => ''
                ),
            3 =>
                array(
                    'id' => 4,
                    'material_am' => 'Թանաք',
                    'material_ru' => '',
                    'material_en' => 'ink'
                ),
            4 =>
                array(
                    'id' => 5,
                    'material_am' => 'Մատիտ',
                    'material_ru' => '',
                    'material_en' => ''
                ),
            5 =>
                array(
                    'id' => 6,
                    'material_am' => 'Պաստել',
                    'material_ru' => '',
                    'material_en' => 'Pastel'
                ),
            6 =>
                array(
                    'id' => 7,
                    'material_am' => 'Ածուխ',
                    'material_ru' => '',
                    'material_en' => 'Charcoal'
                ),
            7 =>
                array(
                    'id' => 8,
                    'material_am' => 'Թուղթ',
                    'material_ru' => '',
                    'material_en' => ''
                ),
            8 =>
                array(
                    'id' => 9,
                    'material_am' => 'Կտավ',
                    'material_ru' => '',
                    'material_en' => ''
                ),
            9 =>
                array(
                    'id' => 10,
                    'material_am' => 'Փայտ',
                    'material_ru' => '',
                    'material_en' => ''
                ),
            10 =>
                array(
                    'id' => 11,
                    'material_am' => 'Տեմպերա',
                    'material_ru' => '',
                    'material_en' => 'Tempera'
                ),
            11 =>
                array(
                    'id' => 12,
                    'material_am' => 'Մոմաներկ',
                    'material_ru' => '',
                    'material_en' => 'Encaustic'
                ),
            12 =>
                array(
                    'id' => 13,
                    'material_am' => 'Գուաշ',
                    'material_ru' => '',
                    'material_en' => 'Gouache'
                ),
            13 =>
                array(
                    'id' => 14,
                    'material_am' => 'Գրաֆիտ',
                    'material_ru' => '',
                    'material_en' => 'Graphite'
                ),
            14 =>
                array(
                    'id' => 15,
                    'material_am' => 'Գրիչ',
                    'material_ru' => '',
                    'material_en' => 'Ballpoint pen'
                ),
            15 =>
                array(
                    'id' => 16,
                    'material_am' => 'Կավիճ',
                    'material_ru' => '',
                    'material_en' => 'Chalk'
                ),
            16 =>
                array(
                    'id' => 17,
                    'material_am' => 'Վիմագիր',
                    'material_ru' => '',
                    'material_en' => 'Lithograph'
                ),
            17 =>
                array(
                    'id' => 18,
                    'material_am' => 'Այլ',
                    'material_ru' => '',
                    'material_en' => ''
                ),

        ));

    }
}
