<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Cloth_materialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cloth_materials')->delete();

        \DB::table('cloth_materials')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'cloth_material_am' => 'Սպանդեքս',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Spandex'
                ),
            1 =>
                array(
                    'id' => 2,
                    'cloth_material_am' => 'Նեյլոն',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Nylon'
                ),
            2 =>
                array(
                    'id' => 3,
                    'cloth_material_am' => 'Էլաստան',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Elastane'
                ),
            3 =>
                array(
                    'id' => 4,
                    'cloth_material_am' => 'Ռայոն',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Rayon'
                ),
            4 =>
                array(
                    'id' => 5,
                    'cloth_material_am' => 'Վիսկոզ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Viscose'
                ),
            5 =>
                array(
                    'id' => 6,
                    'cloth_material_am' => 'Դենիմ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Denim'
                ),
            6 =>
                array(
                    'id' => 7,
                    'cloth_material_am' => 'Ջերս',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Jersey'
                ),
            7 =>
                array(
                    'id' => 8,
                    'cloth_material_am' => 'Վուշ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Linen'
                ),
            8 =>
                array(
                    'id' => 9,
                    'cloth_material_am' => 'Ցանց',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Mesh'
                ),
            9 =>
                array(
                    'id' => 10,
                    'cloth_material_am' => 'Լայկրա',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Lycra'
                ),
            10 =>
                array(
                    'id' => 11,
                    'cloth_material_am' => 'Մետաքս',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Silk'
                ),
            11 =>
                array(
                    'id' => 12,
                    'cloth_material_am' => 'Պոլիամիդ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Polyamide'
                ),
            12 =>
                array(
                    'id' => 13,
                    'cloth_material_am' => 'Բուրդ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Wool'
                ),
            13 =>
                array(
                    'id' => 14,
                    'cloth_material_am' => 'Ակրիլային',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Acrylic'
                ),
            14 =>
                array(
                    'id' => 15,
                    'cloth_material_am' => 'Թվիլ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Twill'
                ),
            15 =>
                array(
                    'id' => 16,
                    'cloth_material_am' => 'Քաշմիր',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Cashmere'
                ),
            16 =>
                array(
                    'id' => 17,
                    'cloth_material_am' => 'Կերպաս',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Satin'
                ),
            17 =>
                array(
                    'id' => 18,
                    'cloth_material_am' => 'Շիֆոն',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Chiffon'
                ),
            18 =>
                array(
                    'id' => 19,
                    'cloth_material_am' => 'Միկրոֆիբր',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Microfiber'
                ),
            19 =>
                array(
                    'id' => 20,
                    'cloth_material_am' => 'Տաֆտա',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Taffeta'
                ),
            20 =>
                array(
                    'id' => 21,
                    'cloth_material_am' => 'Արհեստական կաշի',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Faux Leather'
                ),
            21 =>
                array(
                    'id' => 22,
                    'cloth_material_am' => 'Տրիկոտաժ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Tricot'
                ),
            22 =>
                array(
                    'id' => 23,
                    'cloth_material_am' => 'Ֆլանել',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Flannel'
                ),
            23 =>
                array(
                    'id' => 24,
                    'cloth_material_am' => 'Կանեփ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Hemp'
                ),
            24 =>
                array(
                    'id' => 25,
                    'cloth_material_am' => 'Կրոշե',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Crochet'
                ),
            25 =>
                array(
                    'id' => 26,
                    'cloth_material_am' => 'Կաշի',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Leather'
                ),
            26 =>
                array(
                    'id' => 27,
                    'cloth_material_am' => 'Թավիշ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Velour'
                ),
            27 =>
                array(
                    'id' => 28,
                    'cloth_material_am' => 'Արհեստական թավշակաշի',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Faux suede'
                ),
            28 =>
                array(
                    'id' => 29,
                    'cloth_material_am' => 'Թվիդ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Tweed'
                ),
            29 =>
                array(
                    'id' => 30,
                    'cloth_material_am' => 'Քաթան',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Canvas'
                ),
            30 =>
                array(
                    'id' => 31,
                    'cloth_material_am' => 'Ձեռագործ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Manmade'
                ),
            31 =>
                array(
                    'id' => 32,
                    'cloth_material_am' => 'Վինիլային',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Vinyl'
                ),
            32 =>
                array(
                    'id' => 33,
                    'cloth_material_am' => 'Անգորա',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Angora'
                ),
            33 =>
                array(
                    'id' => 34,
                    'cloth_material_am' => 'Թաղիք',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Felt'
                ),
            34 =>
                array(
                    'id' => 35,
                    'cloth_material_am' => 'Ժակարդ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => 'Jacquard'
                ),
            35 =>
                array(
                    'id' => 36,
                    'cloth_material_am' => 'Այլ',
                    'cloth_material_ru' => '',
                    'cloth_material_en' => ''
                ),
        ));
    }
}
