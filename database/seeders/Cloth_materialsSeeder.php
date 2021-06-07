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
                    'material_am' => 'Սպանդեքս',
                    'material_ru' => '',
                    'material_en' => 'Spandex'
                ),
            1 =>
                array(
                    'id' => 2,
                    'material_am' => 'Նեյլոն',
                    'material_ru' => '',
                    'material_en' => 'Nylon'
                ),
            2 =>
                array(
                    'id' => 3,
                    'material_am' => 'Էլաստան',
                    'material_ru' => '',
                    'material_en' => 'Elastane'
                ),
            3 =>
                array(
                    'id' => 4,
                    'material_am' => 'Ռայոն',
                    'material_ru' => '',
                    'material_en' => 'Rayon'
                ),
            4 =>
                array(
                    'id' => 5,
                    'material_am' => 'Վիսկոզ',
                    'material_ru' => '',
                    'material_en' => 'Viscose'
                ),
            5 =>
                array(
                    'id' => 6,
                    'material_am' => 'Դենիմ',
                    'material_ru' => '',
                    'material_en' => 'Denim'
                ),
            6 =>
                array(
                    'id' => 7,
                    'material_am' => 'Ջերս',
                    'material_ru' => '',
                    'material_en' => 'Jersey'
                ),
            7 =>
                array(
                    'id' => 8,
                    'material_am' => 'Վուշ',
                    'material_ru' => '',
                    'material_en' => 'Linen'
                ),
            8 =>
                array(
                    'id' => 9,
                    'material_am' => 'Ցանց',
                    'material_ru' => '',
                    'material_en' => 'Mesh'
                ),
            9 =>
                array(
                    'id' => 10,
                    'material_am' => 'Լայկրա',
                    'material_ru' => '',
                    'material_en' => 'Lycra'
                ),
            10 =>
                array(
                    'id' => 11,
                    'material_am' => 'Մետաքս',
                    'material_ru' => '',
                    'material_en' => 'Silk'
                ),
            11 =>
                array(
                    'id' => 12,
                    'material_am' => 'Պոլիամիդ',
                    'material_ru' => '',
                    'material_en' => 'Polyamide'
                ),
            12 =>
                array(
                    'id' => 13,
                    'material_am' => 'Բուրդ',
                    'material_ru' => '',
                    'material_en' => 'Wool'
                ),
            13 =>
                array(
                    'id' => 14,
                    'material_am' => 'Ակրիլային',
                    'material_ru' => '',
                    'material_en' => 'Acrylic'
                ),
            14 =>
                array(
                    'id' => 15,
                    'material_am' => 'Թվիլ',
                    'material_ru' => '',
                    'material_en' => 'Twill'
                ),
            15 =>
                array(
                    'id' => 16,
                    'material_am' => 'Քաշմիր',
                    'material_ru' => '',
                    'material_en' => 'Cashmere'
                ),
            16 =>
                array(
                    'id' => 17,
                    'material_am' => 'Կերպաս',
                    'material_ru' => '',
                    'material_en' => 'Satin'
                ),
            17 =>
                array(
                    'id' => 18,
                    'material_am' => 'Շիֆոն',
                    'material_ru' => '',
                    'material_en' => 'Chiffon'
                ),
            18 =>
                array(
                    'id' => 19,
                    'material_am' => 'Միկրոֆիբր',
                    'material_ru' => '',
                    'material_en' => 'Microfiber'
                ),
            19 =>
                array(
                    'id' => 20,
                    'material_am' => 'Տաֆտա',
                    'material_ru' => '',
                    'material_en' => 'Taffeta'
                ),
            20 =>
                array(
                    'id' => 21,
                    'material_am' => 'Արհեստական կաշի',
                    'material_ru' => '',
                    'material_en' => 'Faux Leather'
                ),
            21 =>
                array(
                    'id' => 22,
                    'material_am' => 'Տրիկոտաժ',
                    'material_ru' => '',
                    'material_en' => 'Tricot'
                ),
            22 =>
                array(
                    'id' => 23,
                    'material_am' => 'Ֆլանել',
                    'material_ru' => '',
                    'material_en' => 'Flannel'
                ),
            23 =>
                array(
                    'id' => 24,
                    'material_am' => 'Կանեփ',
                    'material_ru' => '',
                    'material_en' => 'Hemp'
                ),
            24 =>
                array(
                    'id' => 25,
                    'material_am' => 'Կրոշե',
                    'material_ru' => '',
                    'material_en' => 'Crochet'
                ),
            25 =>
                array(
                    'id' => 26,
                    'material_am' => 'Կաշի',
                    'material_ru' => '',
                    'material_en' => 'Leather'
                ),
            26 =>
                array(
                    'id' => 27,
                    'material_am' => 'Թավիշ',
                    'material_ru' => '',
                    'material_en' => 'Velour'
                ),
            27 =>
                array(
                    'id' => 28,
                    'material_am' => 'Արհեստական թավշակաշի',
                    'material_ru' => '',
                    'material_en' => 'Faux suede'
                ),
            28 =>
                array(
                    'id' => 29,
                    'material_am' => 'Թվիդ',
                    'material_ru' => '',
                    'material_en' => 'Tweed'
                ),
            29 =>
                array(
                    'id' => 30,
                    'material_am' => 'Քաթան',
                    'material_ru' => '',
                    'material_en' => 'Canvas'
                ),
            30 =>
                array(
                    'id' => 31,
                    'material_am' => 'Ձեռագործ',
                    'material_ru' => '',
                    'material_en' => 'Manmade'
                ),
            31 =>
                array(
                    'id' => 32,
                    'material_am' => 'Վինիլային',
                    'material_ru' => '',
                    'material_en' => 'Vinyl'
                ),
            32 =>
                array(
                    'id' => 33,
                    'material_am' => 'Անգորա',
                    'material_ru' => '',
                    'material_en' => 'Angora'
                ),
            33 =>
                array(
                    'id' => 34,
                    'material_am' => 'Թաղիք',
                    'material_ru' => '',
                    'material_en' => 'Felt'
                ),
            34 =>
                array(
                    'id' => 35,
                    'material_am' => 'Ժակարդ',
                    'material_ru' => '',
                    'material_en' => 'Jacquard'
                ),
            35 =>
                array(
                    'id' => 36,
                    'material_am' => 'Այլ',
                    'material_ru' => '',
                    'material_en' => ''
                ),
        ));
    }
}
