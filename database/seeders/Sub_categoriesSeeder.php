<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Sub_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_categories')->delete();

        \DB::table('sub_categories')->insert(array(


            0 =>
                array(
                    'id' => 1,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Ականջօղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            1 =>
                array(
                    'id' => 2,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Մատանիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            2 =>
                array(
                    'id' => 3,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Վզնոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            3 =>
                array(
                    'id' => 4,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Շղթաներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            4 =>
                array(
                    'id' => 5,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Կախազարդեր\r\n',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            5 =>
                array(
                    'id' => 6,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Չարմեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            6 =>
                array(
                    'id' => 7,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Թևնոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            7 =>
                array(
                    'id' => 8,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Աքսեսուարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            8 =>
                array(
                    'id' => 9,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Կրծքազարդեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            9 =>
                array(
                    'id' => 10,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Գլխազարդեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            10 =>
                array(
                    'id' => 11,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8',
                    'name_category_am' => 'Հավաքածուներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            11 =>
                array(
                    'id' => 12,
                    'menu_id' => 1,
                    'sub_menu_id' => '1-2-3-4-5-6-7-8-10',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            12 =>
                array(
                    'id' => 13,
                    'menu_id' => 1,
                    'sub_menu_id' => '9',
                    'name_category_am' => 'Դասական',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            13 =>
                array(
                    'id' => 14,
                    'menu_id' => 1,
                    'sub_menu_id' => '9',
                    'name_category_am' => 'Սպորտային',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            14 =>
                array(
                    'id' => 15,
                    'menu_id' => 1,
                    'sub_menu_id' => '9',
                    'name_category_am' => 'Առօրյա',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            15 =>
                array(
                    'id' => 16,
                    'menu_id' => 1,
                    'sub_menu_id' => '9',
                    'name_category_am' => 'Երեխաների համար',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            16 =>
                array(
                    'id' => 17,
                    'menu_id' => 1,
                    'sub_menu_id' => '9',
                    'name_category_am' => 'Տոնական',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            17 =>
                array(
                    'id' => 18,
                    'menu_id' => 1,
                    'sub_menu_id' => '9',
                    'name_category_am' => 'Թանկարժեք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            18 =>
                array(
                    'id' => 19,
                    'menu_id' => 2,
                    'sub_menu_id' => '11',
                    'name_category_am' => 'Գեղանկար',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            19 =>
                array(
                    'id' => 20,
                    'menu_id' => 2,
                    'sub_menu_id' => '11-14',
                    'name_category_am' => 'Մարդիկ և դիմանկարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            20 =>
                array(
                    'id' => 21,
                    'menu_id' => 2,
                    'sub_menu_id' => '11-14',
                    'name_category_am' => 'Բնություն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            21 =>
                array(
                    'id' => 22,
                    'menu_id' => 2,
                    'sub_menu_id' => '11',
                    'name_category_am' => 'Ծաղիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            22 =>
                array(
                    'id' => 23,
                    'menu_id' => 2,
                    'sub_menu_id' => '11',
                    'name_category_am' => 'Կենդանիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            23 =>
                array(
                    'id' => 24,
                    'menu_id' => 2,
                    'sub_menu_id' => '11-12-13-14',
                    'name_category_am' => 'Աբստրակտ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            24 =>
                array(
                    'id' => 26,
                    'menu_id' => 2,
                    'sub_menu_id' => '12',
                    'name_category_am' => 'Կերպարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            25 =>
                array(
                    'id' => 27,
                    'menu_id' => 2,
                    'sub_menu_id' => '12',
                    'name_category_am' => 'Մարդիկ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            26 =>
                array(
                    'id' => 28,
                    'menu_id' => 2,
                    'sub_menu_id' => '13',
                    'name_category_am' => 'Թվային',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            27 =>
                array(
                    'id' => 29,
                    'menu_id' => 2,
                    'sub_menu_id' => '13',
                    'name_category_am' => 'Օրիգինալ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            28 =>
                array(
                    'id' => 30,
                    'menu_id' => 2,
                    'sub_menu_id' => '13',
                    'name_category_am' => 'Ֆոտո',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            29 =>
                array(
                    'id' => 31,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Սև ու սպիտակ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            30 =>
                array(
                    'id' => 33,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Բնակավայրեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            31 =>
                array(
                    'id' => 34,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Ճարտարապետություն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            32 =>
                array(
                    'id' => 35,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Տեսարժան վայրեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            33 =>
                array(
                    'id' => 36,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Համայնապատկեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            34 =>
                array(
                    'id' => 37,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Մակրո',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            35 =>
                array(
                    'id' => 38,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Կոլաժ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            36 =>
                array(
                    'id' => 39,
                    'menu_id' => 2,
                    'sub_menu_id' => '14',
                    'name_category_am' => 'Տիեզերք, աստղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            37 =>
                array(
                    'id' => 40,
                    'menu_id' => 2,
                    'sub_menu_id' => '15-16-17',
                    'name_category_am' => 'Քանդակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            38 =>
                array(
                    'id' => 41,
                    'menu_id' => 2,
                    'sub_menu_id' => '15',
                    'name_category_am' => 'Վիտրաժ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            39 =>
                array(
                    'id' => 42,
                    'menu_id' => 2,
                    'sub_menu_id' => '15',
                    'name_category_am' => 'Խճանկար',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            40 =>
                array(
                    'id' => 43,
                    'menu_id' => 2,
                    'sub_menu_id' => '15-16-18-20-21-22-23',
                    'name_category_am' => 'Դեկոր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            41 =>
                array(
                    'id' => 44,
                    'menu_id' => 2,
                    'sub_menu_id' => '15-16',
                    'name_category_am' => 'Սպասք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            42 =>
                array(
                    'id' => 45,
                    'menu_id' => 2,
                    'sub_menu_id' => '15',
                    'name_category_am' => 'Ծաղկամաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            43 =>
                array(
                    'id' => 46,
                    'menu_id' => 2,
                    'sub_menu_id' => '16',
                    'name_category_am' => 'Սալիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            44 =>
                array(
                    'id' => 47,
                    'menu_id' => 2,
                    'sub_menu_id' => '16',
                    'name_category_am' => 'Անոթներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            45 =>
                array(
                    'id' => 48,
                    'menu_id' => 2,
                    'sub_menu_id' => '16-18',
                    'name_category_am' => 'Զարդեր ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            46 =>
                array(
                    'id' => 49,
                    'menu_id' => 2,
                    'sub_menu_id' => '17',
                    'name_category_am' => 'Նկարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            47 =>
                array(
                    'id' => 50,
                    'menu_id' => 2,
                    'sub_menu_id' => '18',
                    'name_category_am' => 'Խաղ և խաղալիք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            48 =>
                array(
                    'id' => 51,
                    'menu_id' => 2,
                    'sub_menu_id' => '18',
                    'name_category_am' => 'Ժամացույցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            49 =>
                array(
                    'id' => 52,
                    'menu_id' => 2,
                    'sub_menu_id' => '18',
                    'name_category_am' => 'Զարդատուփ, այլ տուփեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            50 =>
                array(
                    'id' => 53,
                    'menu_id' => 2,
                    'sub_menu_id' => '18',
                    'name_category_am' => 'Բար և խոհանոցային',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            51 =>
                array(
                    'id' => 54,
                    'menu_id' => 2,
                    'sub_menu_id' => '18',
                    'name_category_am' => 'Շրջանակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            52 =>
                array(
                    'id' => 55,
                    'menu_id' => 2,
                    'sub_menu_id' => '18',
                    'name_category_am' => 'Կահավորանք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            53 =>
                array(
                    'id' => 56,
                    'menu_id' => 2,
                    'sub_menu_id' => '18',
                    'name_category_am' => 'Կահույք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            54 =>
                array(
                    'id' => 57,
                    'menu_id' => 2,
                    'sub_menu_id' => '19',
                    'name_category_am' => 'Ազգային գորգեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            55 =>
                array(
                    'id' => 58,
                    'menu_id' => 2,
                    'sub_menu_id' => '19',
                    'name_category_am' => 'Այլ գորգեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            56 =>
                array(
                    'id' => 59,
                    'menu_id' => 2,
                    'sub_menu_id' => '19',
                    'name_category_am' => 'Ազգային կարպետներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            57 =>
                array(
                    'id' => 60,
                    'menu_id' => 2,
                    'sub_menu_id' => '19',
                    'name_category_am' => 'Այլ կարպետներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            58 =>
                array(
                    'id' => 61,
                    'menu_id' => 2,
                    'sub_menu_id' => '19',
                    'name_category_am' => 'Գոբելեններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            59 =>
                array(
                    'id' => 62,
                    'menu_id' => 2,
                    'sub_menu_id' => '20-21-22',
                    'name_category_am' => 'Սփռոցներ, անձեռոցիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            60 =>
                array(
                    'id' => 63,
                    'menu_id' => 2,
                    'sub_menu_id' => '20-21-22',
                    'name_category_am' => 'Շարֆեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            61 =>
                array(
                    'id' => 64,
                    'menu_id' => 2,
                    'sub_menu_id' => '21-22-23',
                    'name_category_am' => 'Բարձեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            62 =>
                array(
                    'id' => 65,
                    'menu_id' => 2,
                    'sub_menu_id' => '23',
                    'name_category_am' => 'Ծածկոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            63 =>
                array(
                    'id' => 66,
                    'menu_id' => 2,
                    'sub_menu_id' => '24',
                    'name_category_am' => 'Զամբյուղագործություն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            64 =>
                array(
                    'id' => 67,
                    'menu_id' => 2,
                    'sub_menu_id' => '24',
                    'name_category_am' => 'Թաղիքագործություն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            65 =>
                array(
                    'id' => 68,
                    'menu_id' => 2,
                    'sub_menu_id' => '24',
                    'name_category_am' => 'Մաքրամե',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            66 =>
                array(
                    'id' => 69,
                    'menu_id' => 2,
                    'sub_menu_id' => '24',
                    'name_category_am' => 'Հելյունագործություն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            67 =>
                array(
                    'id' => 70,
                    'menu_id' => 2,
                    'sub_menu_id' => '24',
                    'name_category_am' => 'Ուլունքագործություն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            68 =>
                array(
                    'id' => 71,
                    'menu_id' => 2,
                    'sub_menu_id' => '24',
                    'name_category_am' => 'Կոճակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            69 =>
                array(
                    'id' => 72,
                    'menu_id' => 2,
                    'sub_menu_id' => '24',
                    'name_category_am' => 'Հուշանվերներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            70 =>
                array(
                    'id' => 73,
                    'menu_id' => 2,
                    'sub_menu_id' => '11-12-13-14-15-16-17-18-19-20-21-22-23-24',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            71 =>
                array(
                    'id' => 74,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-26-27',
                    'name_category_am' => 'Բլուզ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            72 =>
                array(
                    'id' => 75,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-27',
                    'name_category_am' => 'Զգեստ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            73 =>
                array(
                    'id' => 76,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-26-27',
                    'name_category_am' => 'Բաճկոն և վերարկու',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            74 =>
                array(
                    'id' => 78,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-26-27',
                    'name_category_am' => 'Սվիտեր և ժակետ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            75 =>
                array(
                    'id' => 79,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-26-27',
                    'name_category_am' => 'Տաբատ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            76 =>
                array(
                    'id' => 80,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-26-27',
                    'name_category_am' => 'Վերնաշապիկ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            77 =>
                array(
                    'id' => 81,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-27',
                    'name_category_am' => 'Կիսաշրջազգեստ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            78 =>
                array(
                    'id' => 82,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-29-30',
                    'name_category_am' => 'Սանդալներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            79 =>
                array(
                    'id' => 83,
                    'menu_id' => 3,
                    'sub_menu_id' => '28',
                    'name_category_am' => 'Բարձրակրունկ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            80 =>
                array(
                    'id' => 84,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-29-30',
                    'name_category_am' => 'Ճտքավոր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            81 =>
                array(
                    'id' => 85,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-29-30',
                    'name_category_am' => 'Սնիկերսներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            82 =>
                array(
                    'id' => 86,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-29-30',
                    'name_category_am' => 'Օքսվորդներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            83 =>
                array(
                    'id' => 87,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-29-30',
                    'name_category_am' => 'Բոաթներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            84 =>
                array(
                    'id' => 88,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-30',
                    'name_category_am' => 'Լոֆերներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            85 =>
                array(
                    'id' => 89,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-30',
                    'name_category_am' => 'Բալետներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            86 =>
                array(
                    'id' => 90,
                    'menu_id' => 3,
                    'sub_menu_id' => '28-29-30',
                    'name_category_am' => 'Հողաթափեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            87 =>
                array(
                    'id' => 91,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Զարդեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            88 =>
                array(
                    'id' => 92,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            89 =>
                array(
                    'id' => 93,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Տեխնիկայի աքսեսուարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            90 =>
                array(
                    'id' => 94,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Գոտիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            91 =>
                array(
                    'id' => 95,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Շարֆեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            92 =>
                array(
                    'id' => 96,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Գլխարկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            93 =>
                array(
                    'id' => 97,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Ձեռնոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            94 =>
                array(
                    'id' => 98,
                    'menu_id' => 3,
                    'sub_menu_id' => '31',
                    'name_category_am' => 'Փողկապներ, թաշկինակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            95 =>
                array(
                    'id' => 99,
                    'menu_id' => 3,
                    'sub_menu_id' => '25-26-27-28-29-30-31',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            96 =>
                array(
                    'id' => 100,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Ձեռքի պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            97 =>
                array(
                    'id' => 101,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Ուսապարկեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            98 =>
                array(
                    'id' => 102,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Դրամապանակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            99 =>
                array(
                    'id' => 103,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Գոտի պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            100 =>
                array(
                    'id' => 105,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Ճամպրուկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            101 =>
                array(
                    'id' => 106,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Սպորտային պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            102 =>
                array(
                    'id' => 107,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Կոսմետիկ պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            103 =>
                array(
                    'id' => 108,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Ճամփորդական աքսեսուարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            104 =>
                array(
                    'id' => 109,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Փոստատարի պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            105 =>
                array(
                    'id' => 110,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Լանչի համար',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            106 =>
                array(
                    'id' => 111,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Փաստաթղթերի համար',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            107 =>
                array(
                    'id' => 112,
                    'menu_id' => 4,
                    'sub_menu_id' => '32-33',
                    'name_category_am' => 'Նոութբուքների համար',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            108 =>
                array(
                    'id' => 113,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Փոքր, տոնական',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            109 =>
                array(
                    'id' => 114,
                    'menu_id' => 4,
                    'sub_menu_id' => '32',
                    'name_category_am' => 'Արվեստագետների համար',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            110 =>
                array(
                    'id' => 115,
                    'menu_id' => 4,
                    'sub_menu_id' => '33',
                    'name_category_am' => 'Հեռախոսների պատյաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            111 =>
                array(
                    'id' => 116,
                    'menu_id' => 4,
                    'sub_menu_id' => '33',
                    'name_category_am' => 'Պլանշետների պատյաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            112 =>
                array(
                    'id' => 117,
                    'menu_id' => 4,
                    'sub_menu_id' => '33',
                    'name_category_am' => 'Փոքր պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            113 =>
                array(
                    'id' => 118,
                    'menu_id' => 4,
                    'sub_menu_id' => '34',
                    'name_category_am' => 'Զարդ գոտիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            114 =>
                array(
                    'id' => 119,
                    'menu_id' => 4,
                    'sub_menu_id' => '34',
                    'name_category_am' => 'Գործվածքային',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            115 =>
                array(
                    'id' => 120,
                    'menu_id' => 4,
                    'sub_menu_id' => '34',
                    'name_category_am' => 'Դասական',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            116 =>
                array(
                    'id' => 121,
                    'menu_id' => 4,
                    'sub_menu_id' => '34',
                    'name_category_am' => 'Սպորտային',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            117 =>
                array(
                    'id' => 122,
                    'menu_id' => 4,
                    'sub_menu_id' => '34',
                    'name_category_am' => 'Ճարմանդներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            118 =>
                array(
                    'id' => 123,
                    'menu_id' => 4,
                    'sub_menu_id' => '35',
                    'name_category_am' => 'Բատիկ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            119 =>
                array(
                    'id' => 124,
                    'menu_id' => 4,
                    'sub_menu_id' => '35',
                    'name_category_am' => 'Ասեղնագործ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            120 =>
                array(
                    'id' => 125,
                    'menu_id' => 4,
                    'sub_menu_id' => '35',
                    'name_category_am' => 'Ժանեկազարդ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            121 =>
                array(
                    'id' => 126,
                    'menu_id' => 4,
                    'sub_menu_id' => '35',
                    'name_category_am' => 'Գործված',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            122 =>
                array(
                    'id' => 127,
                    'menu_id' => 4,
                    'sub_menu_id' => '35',
                    'name_category_am' => 'Թիկնոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            123 =>
                array(
                    'id' => 128,
                    'menu_id' => 4,
                    'sub_menu_id' => '35',
                    'name_category_am' => 'Շալեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            124 =>
                array(
                    'id' => 129,
                    'menu_id' => 4,
                    'sub_menu_id' => '35',
                    'name_category_am' => 'Բանդանաներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            125 =>
                array(
                    'id' => 130,
                    'menu_id' => 4,
                    'sub_menu_id' => '35-36-37',
                    'name_category_am' => 'Հավաքածուներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            126 =>
                array(
                    'id' => 131,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Կեպիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            127 =>
                array(
                    'id' => 132,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Բինի գլխարկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            128 =>
                array(
                    'id' => 133,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Բերետներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            129 =>
                array(
                    'id' => 134,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Լայնեզր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            130 =>
                array(
                    'id' => 135,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Պանամա',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            131 =>
                array(
                    'id' => 136,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Ձմեռային',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            132 =>
                array(
                    'id' => 137,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Կովբոյ գլխարկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            133 =>
                array(
                    'id' => 138,
                    'menu_id' => 4,
                    'sub_menu_id' => '36',
                    'name_category_am' => 'Տոնական',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            134 =>
                array(
                    'id' => 139,
                    'menu_id' => 4,
                    'sub_menu_id' => '37',
                    'name_category_am' => 'Դասական',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            135 =>
                array(
                    'id' => 140,
                    'menu_id' => 4,
                    'sub_menu_id' => '37',
                    'name_category_am' => 'Թաթպաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            136 =>
                array(
                    'id' => 141,
                    'menu_id' => 4,
                    'sub_menu_id' => '37',
                    'name_category_am' => 'Առանց մատների',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            137 =>
                array(
                    'id' => 142,
                    'menu_id' => 4,
                    'sub_menu_id' => '37',
                    'name_category_am' => 'Երեկոյան',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            138 =>
                array(
                    'id' => 143,
                    'menu_id' => 4,
                    'sub_menu_id' => '38',
                    'name_category_am' => 'Դասական փողկապներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            139 =>
                array(
                    'id' => 144,
                    'menu_id' => 4,
                    'sub_menu_id' => '38',
                    'name_category_am' => 'Թիթեռ փողկապներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            140 =>
                array(
                    'id' => 145,
                    'menu_id' => 4,
                    'sub_menu_id' => '38',
                    'name_category_am' => 'Այլ փողկապներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            141 =>
                array(
                    'id' => 146,
                    'menu_id' => 4,
                    'sub_menu_id' => '38',
                    'name_category_am' => 'Թաշկինակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            142 =>
                array(
                    'id' => 147,
                    'menu_id' => 4,
                    'sub_menu_id' => '39',
                    'name_category_am' => 'Կոճակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            143 =>
                array(
                    'id' => 148,
                    'menu_id' => 4,
                    'sub_menu_id' => '39',
                    'name_category_am' => 'Ճարմանդներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            144 =>
                array(
                    'id' => 149,
                    'menu_id' => 4,
                    'sub_menu_id' => '39',
                    'name_category_am' => 'Քորոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            145 =>
                array(
                    'id' => 150,
                    'menu_id' => 4,
                    'sub_menu_id' => '32-33-34-35-36-37-38-39',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            146 =>
                array(
                    'id' => 151,
                    'menu_id' => 5,
                    'sub_menu_id' => '40',
                    'name_category_am' => 'Հյուրասենյակի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            147 =>
                array(
                    'id' => 152,
                    'menu_id' => 5,
                    'sub_menu_id' => '40',
                    'name_category_am' => 'Ննջարանի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            148 =>
                array(
                    'id' => 153,
                    'menu_id' => 5,
                    'sub_menu_id' => '40',
                    'name_category_am' => 'Միջանցքի և նախասրահի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            149 =>
                array(
                    'id' => 154,
                    'menu_id' => 5,
                    'sub_menu_id' => '40',
                    'name_category_am' => 'Աշխատասենյակի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            150 =>
                array(
                    'id' => 155,
                    'menu_id' => 5,
                    'sub_menu_id' => '40',
                    'name_category_am' => 'Մանկական սենյակի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            151 =>
                array(
                    'id' => 156,
                    'menu_id' => 5,
                    'sub_menu_id' => '40',
                    'name_category_am' => 'Սանհանգույցի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            152 =>
                array(
                    'id' => 157,
                    'menu_id' => 5,
                    'sub_menu_id' => '40',
                    'name_category_am' => 'Բակի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            153 =>
                array(
                    'id' => 158,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Պատին ամրացվող',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            154 =>
                array(
                    'id' => 159,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Լուսամփոփներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            155 =>
                array(
                    'id' => 160,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Լամպեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            156 =>
                array(
                    'id' => 161,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Լապտերներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            157 =>
                array(
                    'id' => 162,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Գիշերային',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            158 =>
                array(
                    'id' => 163,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Սենյակի ջահեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            159 =>
                array(
                    'id' => 164,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Ննջասենյակի ջահեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            160 =>
                array(
                    'id' => 165,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Խոհանոցի ջահեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            161 =>
                array(
                    'id' => 166,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Դեկորատիվ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            162 =>
                array(
                    'id' => 167,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Մոմակալներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            163 =>
                array(
                    'id' => 168,
                    'menu_id' => 5,
                    'sub_menu_id' => '41',
                    'name_category_am' => 'Մոմեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            164 =>
                array(
                    'id' => 169,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Հայելի',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            165 =>
                array(
                    'id' => 170,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Շրջանակներ, ցուցանակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            166 =>
                array(
                    'id' => 171,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Ժամացույցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            167 =>
                array(
                    'id' => 172,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Ծաղկամաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            168 =>
                array(
                    'id' => 173,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Դեկորատիվ սկուտեղներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            169 =>
                array(
                    'id' => 174,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Զամբյուղներ, տուփեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            170 =>
                array(
                    'id' => 175,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Պատի դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            171 =>
                array(
                    'id' => 176,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Դեկորատիվ սալիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            172 =>
                array(
                    'id' => 177,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Դեկորատիվ բարձեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            173 =>
                array(
                    'id' => 178,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Աթոռի բարձեր, ծածկոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            174 =>
                array(
                    'id' => 179,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Սփռոցներ, անձեռոցիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            175 =>
                array(
                    'id' => 180,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Վարագույրներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            176 =>
                array(
                    'id' => 181,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Այլ դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            177 =>
                array(
                    'id' => 182,
                    'menu_id' => 5,
                    'sub_menu_id' => '42',
                    'name_category_am' => 'Շինանյութ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            178 =>
                array(
                    'id' => 183,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Հավաքածուներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            179 =>
                array(
                    'id' => 184,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Բաժակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            180 =>
                array(
                    'id' => 185,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Ափսեներ, թասեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            181 =>
                array(
                    'id' => 186,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Սուրճ,թեյի սպասք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            182 =>
                array(
                    'id' => 187,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Տակդիրներ, սկուտեղներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            183 =>
                array(
                    'id' => 188,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Դանակ, պատառաքաղ և այլն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            184 =>
                array(
                    'id' => 189,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Խոհարարական պարագաներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            185 =>
                array(
                    'id' => 190,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Խոհարարական աքսեսուարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            186 =>
                array(
                    'id' => 191,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Սփռոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            187 =>
                array(
                    'id' => 192,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Սեղանի դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            188 =>
                array(
                    'id' => 194,
                    'menu_id' => 5,
                    'sub_menu_id' => '43',
                    'name_category_am' => 'Գոգնոցներ, բռնիչներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            189 =>
                array(
                    'id' => 195,
                    'menu_id' => 5,
                    'sub_menu_id' => '43-44',
                    'name_category_am' => 'Սրբիչներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            190 =>
                array(
                    'id' => 196,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Դարակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            191 =>
                array(
                    'id' => 197,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Կախիչներ, ձողեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            192 =>
                array(
                    'id' => 198,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Բաժակներ, տուփեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            193 =>
                array(
                    'id' => 199,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Օճառամաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            194 =>
                array(
                    'id' => 200,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Լվացարաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            195 =>
                array(
                    'id' => 201,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Լողափի սրբիչներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            196 =>
                array(
                    'id' => 202,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Մանկական սրբիչներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            197 =>
                array(
                    'id' => 203,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Վարագույրներ, օղակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            198 =>
                array(
                    'id' => 204,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Գորգեր, հատակի կտորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            199 =>
                array(
                    'id' => 205,
                    'menu_id' => 5,
                    'sub_menu_id' => '44',
                    'name_category_am' => 'Լոգարանի դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            200 =>
                array(
                    'id' => 206,
                    'menu_id' => 5,
                    'sub_menu_id' => '45',
                    'name_category_am' => 'Զարդատուփեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            201 =>
                array(
                    'id' => 207,
                    'menu_id' => 5,
                    'sub_menu_id' => '45',
                    'name_category_am' => 'Դեկորատիվ արկղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            202 =>
                array(
                    'id' => 208,
                    'menu_id' => 5,
                    'sub_menu_id' => '45',
                    'name_category_am' => 'Բիզնես աքսեսուարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            203 =>
                array(
                    'id' => 209,
                    'menu_id' => 5,
                    'sub_menu_id' => '45',
                    'name_category_am' => 'Զամբյուղներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            204 =>
                array(
                    'id' => 210,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Ծածկոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            205 =>
                array(
                    'id' => 211,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Գործվածքային ծածկոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            206 =>
                array(
                    'id' => 212,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Անկողնային հավաքածուներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            207 =>
                array(
                    'id' => 213,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Բարձեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            208 =>
                array(
                    'id' => 214,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Նորածինների զամբյուղներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            209 =>
                array(
                    'id' => 215,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Մանկական անկողիններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            210 =>
                array(
                    'id' => 216,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Օրորոցային աքսեսուարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            211 =>
                array(
                    'id' => 217,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Սրբիչներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            212 =>
                array(
                    'id' => 218,
                    'menu_id' => 5,
                    'sub_menu_id' => '46',
                    'name_category_am' => 'Նկարված կտորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            213 =>
                array(
                    'id' => 219,
                    'menu_id' => 5,
                    'sub_menu_id' => '47',
                    'name_category_am' => 'Ազգային գորգեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            214 =>
                array(
                    'id' => 220,
                    'menu_id' => 5,
                    'sub_menu_id' => '47',
                    'name_category_am' => 'Այլ գորգեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            215 =>
                array(
                    'id' => 221,
                    'menu_id' => 5,
                    'sub_menu_id' => '47',
                    'name_category_am' => 'Ազգային կարպետներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            216 =>
                array(
                    'id' => 222,
                    'menu_id' => 5,
                    'sub_menu_id' => '47',
                    'name_category_am' => 'Այլ կարպետներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            217 =>
                array(
                    'id' => 223,
                    'menu_id' => 5,
                    'sub_menu_id' => '47',
                    'name_category_am' => 'Գոբելեններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            218 =>
                array(
                    'id' => 225,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Արտաքին դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            219 =>
                array(
                    'id' => 226,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Այգու դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            220 =>
                array(
                    'id' => 227,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Ծաղկամաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            221 =>
                array(
                    'id' => 228,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Բակի կահույք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            222 =>
                array(
                    'id' => 229,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Ճոճանակ, ցանցաճոճ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            223 =>
                array(
                    'id' => 230,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Արտաքին լույսեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            224 =>
                array(
                    'id' => 231,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Պիկնիկի զամբյուղներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            225 =>
                array(
                    'id' => 232,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Փոստարկղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            226 =>
                array(
                    'id' => 233,
                    'menu_id' => 5,
                    'sub_menu_id' => '48',
                    'name_category_am' => 'Մանղալ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            227 =>
                array(
                    'id' => 234,
                    'menu_id' => 5,
                    'sub_menu_id' => '49',
                    'name_category_am' => 'Մաշկի խնամք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            228 =>
                array(
                    'id' => 235,
                    'menu_id' => 5,
                    'sub_menu_id' => '49',
                    'name_category_am' => 'Մազերի խնամք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            229 =>
                array(
                    'id' => 236,
                    'menu_id' => 5,
                    'sub_menu_id' => '49',
                    'name_category_am' => 'Եթերային յուղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            230 =>
                array(
                    'id' => 237,
                    'menu_id' => 5,
                    'sub_menu_id' => '49',
                    'name_category_am' => 'Բուրմունքներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            231 =>
                array(
                    'id' => 238,
                    'menu_id' => 5,
                    'sub_menu_id' => '49',
                    'name_category_am' => 'Օճառներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            232 =>
                array(
                    'id' => 239,
                    'menu_id' => 5,
                    'sub_menu_id' => '49',
                    'name_category_am' => 'Դիմակներ և այլ խնամք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            233 =>
                array(
                    'id' => 240,
                    'menu_id' => 5,
                    'sub_menu_id' => '49',
                    'name_category_am' => 'Կոսմետիկ միջոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            234 =>
                array(
                    'id' => 241,
                    'menu_id' => 5,
                    'sub_menu_id' => '40-41-43-44-45-46-47-48-49',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            235 =>
                array(
                    'id' => 242,
                    'menu_id' => 6,
                    'sub_menu_id' => '55',
                    'name_category_am' => 'Ազգային մոտիվներով',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            236 =>
                array(
                    'id' => 243,
                    'menu_id' => 6,
                    'sub_menu_id' => '55',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            237 =>
                array(
                    'id' => 244,
                    'menu_id' => 7,
                    'sub_menu_id' => '57',
                    'name_category_am' => 'Հրավիրատոմսեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            238 =>
                array(
                    'id' => 245,
                    'menu_id' => 7,
                    'sub_menu_id' => '57',
                    'name_category_am' => 'Բացիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            239 =>
                array(
                    'id' => 246,
                    'menu_id' => 7,
                    'sub_menu_id' => '57',
                    'name_category_am' => 'Ծրարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            240 =>
                array(
                    'id' => 247,
                    'menu_id' => 7,
                    'sub_menu_id' => '57',
                    'name_category_am' => 'Փաթեթավորում',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            241 =>
                array(
                    'id' => 248,
                    'menu_id' => 7,
                    'sub_menu_id' => '58',
                    'name_category_am' => 'Մոմեր, մոմակալներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            242 =>
                array(
                    'id' => 250,
                    'menu_id' => 7,
                    'sub_menu_id' => '58',
                    'name_category_am' => 'Զամբյուղներ, արկղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            243 =>
                array(
                    'id' => 251,
                    'menu_id' => 7,
                    'sub_menu_id' => '58',
                    'name_category_am' => 'Մատանիի բարձիկ, տուփ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            244 =>
                array(
                    'id' => 252,
                    'menu_id' => 7,
                    'sub_menu_id' => '58',
                    'name_category_am' => 'Փակցվող, դրվող դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            245 =>
                array(
                    'id' => 253,
                    'menu_id' => 7,
                    'sub_menu_id' => '58',
                    'name_category_am' => 'Սեղանի դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            246 =>
                array(
                    'id' => 254,
                    'menu_id' => 7,
                    'sub_menu_id' => '58',
                    'name_category_am' => 'Սպասք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            247 =>
                array(
                    'id' => 255,
                    'menu_id' => 7,
                    'sub_menu_id' => '59-60',
                    'name_category_am' => 'Հարսի քողեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            248 =>
                array(
                    'id' => 256,
                    'menu_id' => 7,
                    'sub_menu_id' => '59-60',
                    'name_category_am' => 'Պայուսակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            249 =>
                array(
                    'id' => 257,
                    'menu_id' => 7,
                    'sub_menu_id' => '59-60',
                    'name_category_am' => 'Թիկնոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            250 =>
                array(
                    'id' => 258,
                    'menu_id' => 7,
                    'sub_menu_id' => '59-60',
                    'name_category_am' => 'Գլխարկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            251 =>
                array(
                    'id' => 259,
                    'menu_id' => 7,
                    'sub_menu_id' => '59-60',
                    'name_category_am' => 'Գոտիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            252 =>
                array(
                    'id' => 260,
                    'menu_id' => 7,
                    'sub_menu_id' => '59-60',
                    'name_category_am' => 'Փողկապներ, վզկապներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            253 =>
                array(
                    'id' => 261,
                    'menu_id' => 7,
                    'sub_menu_id' => '59-60',
                    'name_category_am' => 'Ձեռնոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            254 =>
                array(
                    'id' => 262,
                    'menu_id' => 7,
                    'sub_menu_id' => '59',
                    'name_category_am' => 'Ծաղկեփնջեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            255 =>
                array(
                    'id' => 263,
                    'menu_id' => 7,
                    'sub_menu_id' => '59',
                    'name_category_am' => 'Գրպանի ծաղիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            256 =>
                array(
                    'id' => 264,
                    'menu_id' => 7,
                    'sub_menu_id' => '59',
                    'name_category_am' => 'Անձրևանոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            257 =>
                array(
                    'id' => 265,
                    'menu_id' => 7,
                    'sub_menu_id' => '59',
                    'name_category_am' => 'Տարոսիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            258 =>
                array(
                    'id' => 266,
                    'menu_id' => 7,
                    'sub_menu_id' => '60',
                    'name_category_am' => 'Զգեստ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            259 =>
                array(
                    'id' => 267,
                    'menu_id' => 7,
                    'sub_menu_id' => '60',
                    'name_category_am' => 'Կոստյում',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            260 =>
                array(
                    'id' => 268,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Ականջօղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            261 =>
                array(
                    'id' => 270,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Մատանիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            262 =>
                array(
                    'id' => 271,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Վզնոցներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            263 =>
                array(
                    'id' => 272,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Շղթաներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            264 =>
                array(
                    'id' => 273,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Կախազարդեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            265 =>
                array(
                    'id' => 274,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Ապարանջաններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            266 =>
                array(
                    'id' => 275,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Չարմեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            267 =>
                array(
                    'id' => 276,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Գլխազարդեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            268 =>
                array(
                    'id' => 277,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Գոտիներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            269 =>
                array(
                    'id' => 278,
                    'menu_id' => 7,
                    'sub_menu_id' => '61',
                    'name_category_am' => 'Հավաքածուներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            270 =>
                array(
                    'id' => 279,
                    'menu_id' => 7,
                    'sub_menu_id' => '62',
                    'name_category_am' => 'Հագուստ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            271 =>
                array(
                    'id' => 280,
                    'menu_id' => 7,
                    'sub_menu_id' => '62',
                    'name_category_am' => 'Մոմեր և մոմակալներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            272 =>
                array(
                    'id' => 281,
                    'menu_id' => 7,
                    'sub_menu_id' => '62-63-64',
                    'name_category_am' => 'Հրավիրատոմսեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            273 =>
                array(
                    'id' => 282,
                    'menu_id' => 7,
                    'sub_menu_id' => '62-63-64',
                    'name_category_am' => 'Բացիկներ և ծրարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            274 =>
                array(
                    'id' => 283,
                    'menu_id' => 7,
                    'sub_menu_id' => '62-63-64',
                    'name_category_am' => 'Փաթեթավորում',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            275 =>
                array(
                    'id' => 286,
                    'menu_id' => 7,
                    'sub_menu_id' => '62-63-64',
                    'name_category_am' => 'Զամբյուղներ և արկղեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            276 =>
                array(
                    'id' => 287,
                    'menu_id' => 7,
                    'sub_menu_id' => '62-63-64',
                    'name_category_am' => 'Փակցվող, դրվող դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            277 =>
                array(
                    'id' => 288,
                    'menu_id' => 7,
                    'sub_menu_id' => '62-63-64',
                    'name_category_am' => 'Սեղանի դեկորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            278 =>
                array(
                    'id' => 289,
                    'menu_id' => 7,
                    'sub_menu_id' => '62-63-64',
                    'name_category_am' => 'Սպասք',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            279 =>
                array(
                    'id' => 290,
                    'menu_id' => 7,
                    'sub_menu_id' => '62',
                    'name_category_am' => 'Տարոսիկներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            280 =>
                array(
                    'id' => 291,
                    'menu_id' => 7,
                    'sub_menu_id' => '62',
                    'name_category_am' => 'Խաչեր և շղթաներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            281 =>
                array(
                    'id' => 292,
                    'menu_id' => 7,
                    'sub_menu_id' => '57-58-59-60-61-62',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            282 =>
                array(
                    'id' => 293,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Մատիտներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            283 =>
                array(
                    'id' => 294,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Պաստել, սանգինա և այլն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            284 =>
                array(
                    'id' => 295,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Վրձիններ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            285 =>
                array(
                    'id' => 296,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Թղթեր, կտավներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            286 =>
                array(
                    'id' => 297,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Ռետիններ, սրիչներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            287 =>
                array(
                    'id' => 298,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Ջրաներկեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            288 =>
                array(
                    'id' => 299,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Յուղաներկեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            289 =>
                array(
                    'id' => 300,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Ակրիլիկ ներկեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            290 =>
                array(
                    'id' => 301,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Բատիկի ներկեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            291 =>
                array(
                    'id' => 302,
                    'menu_id' => 8,
                    'sub_menu_id' => '65-66-67-68-70',
                    'name_category_am' => 'Գործիքներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            292 =>
                array(
                    'id' => 303,
                    'menu_id' => 8,
                    'sub_menu_id' => '65',
                    'name_category_am' => 'Շրջանակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            293 =>
                array(
                    'id' => 305,
                    'menu_id' => 8,
                    'sub_menu_id' => '65-66-67-68-69-70',
                    'name_category_am' => 'Գրքեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            294 =>
                array(
                    'id' => 306,
                    'menu_id' => 8,
                    'sub_menu_id' => '66',
                    'name_category_am' => 'Ներկեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            295 =>
                array(
                    'id' => 307,
                    'menu_id' => 8,
                    'sub_menu_id' => '66',
                    'name_category_am' => 'Կավ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            296 =>
                array(
                    'id' => 308,
                    'menu_id' => 8,
                    'sub_menu_id' => '66',
                    'name_category_am' => 'Կաղապարներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            297 =>
                array(
                    'id' => 309,
                    'menu_id' => 8,
                    'sub_menu_id' => '67',
                    'name_category_am' => 'Լաքեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            298 =>
                array(
                    'id' => 310,
                    'menu_id' => 8,
                    'sub_menu_id' => '68',
                    'name_category_am' => 'Ուլունքներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            299 =>
                array(
                    'id' => 311,
                    'menu_id' => 8,
                    'sub_menu_id' => '68',
                    'name_category_am' => 'Քարեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            300 =>
                array(
                    'id' => 312,
                    'menu_id' => 8,
                    'sub_menu_id' => '68-70',
                    'name_category_am' => 'Կեռիկներ, օղակներ և այլն',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            301 =>
                array(
                    'id' => 313,
                    'menu_id' => 8,
                    'sub_menu_id' => '69',
                    'name_category_am' => 'Կտորներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            302 =>
                array(
                    'id' => 314,
                    'menu_id' => 8,
                    'sub_menu_id' => '69',
                    'name_category_am' => 'Ասեղներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            303 =>
                array(
                    'id' => 315,
                    'menu_id' => 8,
                    'sub_menu_id' => '69-70',
                    'name_category_am' => 'Թելեր',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            304 =>
                array(
                    'id' => 316,
                    'menu_id' => 8,
                    'sub_menu_id' => '69-70',
                    'name_category_am' => 'Կոճակներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            305 =>
                array(
                    'id' => 317,
                    'menu_id' => 8,
                    'sub_menu_id' => '69',
                    'name_category_am' => 'Շղթաներ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),
            306 =>
                array(
                    'id' => 318,
                    'menu_id' => 8,
                    'sub_menu_id' => '65-66-67-68-69-70',
                    'name_category_am' => 'Այլ',
                    'name_category_ru' => '',
                    'name_category_en' => ''
                ),

        ));
    }
}
