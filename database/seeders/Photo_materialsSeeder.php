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
                    'photo_material_am' => 'Յուղաներկ',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Oil'
                ),
            1 =>
                array(
                    'id' => 2,
                    'photo_material_am' => 'Ակրիլ',
                    'photo_material_ru' => '',
                    'photo_material_en' => ''
                ),
            2 =>
                array(
                    'id' => 3,
                    'photo_material_am' => 'Ջրաներկ',
                    'photo_material_ru' => '',
                    'photo_material_en' => ''
                ),
            3 =>
                array(
                    'id' => 4,
                    'photo_material_am' => 'Թանաք',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'ink'
                ),
            4 =>
                array(
                    'id' => 5,
                    'photo_material_am' => 'Մատիտ',
                    'photo_material_ru' => '',
                    'photo_material_en' => ''
                ),
            5 =>
                array(
                    'id' => 6,
                    'photo_material_am' => 'Պաստել',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Pastel'
                ),
            6 =>
                array(
                    'id' => 7,
                    'photo_material_am' => 'Ածուխ',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Charcoal'
                ),
            7 =>
                array(
                    'id' => 8,
                    'photo_material_am' => 'Թուղթ',
                    'photo_material_ru' => '',
                    'photo_material_en' => ''
                ),
            8 =>
                array(
                    'id' => 9,
                    'photo_material_am' => 'Կտավ',
                    'photo_material_ru' => '',
                    'photo_material_en' => ''
                ),
            9 =>
                array(
                    'id' => 10,
                    'photo_material_am' => 'Փայտ',
                    'photo_material_ru' => '',
                    'photo_material_en' => ''
                ),
            10 =>
                array(
                    'id' => 11,
                    'photo_material_am' => 'Տեմպերա',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Tempera'
                ),
            11 =>
                array(
                    'id' => 12,
                    'photo_material_am' => 'Մոմաներկ',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Encaustic'
                ),
            12 =>
                array(
                    'id' => 13,
                    'photo_material_am' => 'Գուաշ',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Gouache'
                ),
            13 =>
                array(
                    'id' => 14,
                    'photo_material_am' => 'Գրաֆիտ',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Graphite'
                ),
            14 =>
                array(
                    'id' => 15,
                    'photo_material_am' => 'Գրիչ',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Ballpoint pen'
                ),
            15 =>
                array(
                    'id' => 16,
                    'photo_material_am' => 'Կավիճ',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Chalk'
                ),
            16 =>
                array(
                    'id' => 17,
                    'photo_material_am' => 'Վիմագիր',
                    'photo_material_ru' => '',
                    'photo_material_en' => 'Lithograph'
                ),
            17 =>
                array(
                    'id' => 18,
                    'photo_material_am' => 'Այլ',
                    'photo_material_ru' => '',
                    'photo_material_en' => ''
                ),

        ));

    }
}
