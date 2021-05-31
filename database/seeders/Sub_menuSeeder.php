<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Sub_menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_menus')->delete();

        \DB::table('sub_menus')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Ազգային մոտիվներով',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            1 =>
                array(
                    'id' => 2,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Թանկարժեք զարդեր',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            2 =>
                array(
                    'id' => 3,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Հարսանեկան',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            3 =>
                array(
                    'id' => 4,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Տոնական',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            4 =>
                array(
                    'id' => 5,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Առօրյա',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            5 =>
                array(
                    'id' => 6,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Էմալով բույսերով',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            6 =>
                array(
                    'id' => 7,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Բնական քարերով',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            7 =>
                array(
                    'id' => 8,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Բիժուտերիա',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            8 =>
                array(
                    'id' => 9,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Ժամացույցներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            9 =>
                array(
                    'id' => 10,
                    'menu_id' => 1,
                    'sub_menu_name_am' => 'Այլ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            10 =>
                array(
                    'id' => 11,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Նկարներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            11 =>
                array(
                    'id' => 12,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Քանդակներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            12 =>
                array(
                    'id' => 13,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Կոլաժներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            13 =>
                array(
                    'id' => 14,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Լուսանկարներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            14 =>
                array(
                    'id' => 15,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Ապակի',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            15 =>
                array(
                    'id' => 16,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Կերամիկա',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            16 =>
                array(
                    'id' => 17,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Ռեպրոդուկցիա',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            17 =>
                array(
                    'id' => 18,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Փայտ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            18 =>
                array(
                    'id' => 19,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Գորգ, կարպետ, գոբելեն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            19 =>
                array(
                    'id' => 20,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Բատիկ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            20 =>
                array(
                    'id' => 21,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Ասեղնագործություն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            21 =>
                array(
                    'id' => 22,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'ժանյակ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            22 =>
                array(
                    'id' => 23,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Փեչվորք',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            23 =>
                array(
                    'id' => 24,
                    'menu_id' => 2,
                    'sub_menu_name_am' => 'Այլ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            24 =>
                array(
                    'id' => 25,
                    'menu_id' => 3,
                    'sub_menu_name_am' => 'Կանանց հագուստ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            25 =>
                array(
                    'id' => 26,
                    'menu_id' => 3,
                    'sub_menu_name_am' => 'Տղամարդկանց հագուստ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            26 =>
                array(
                    'id' => 27,
                    'menu_id' => 3,
                    'sub_menu_name_am' => 'Երեխաների հագուստ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            27 =>
                array(
                    'id' => 28,
                    'menu_id' => 3,
                    'sub_menu_name_am' => 'Կանանց կոշիկներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            28 =>
                array(
                    'id' => 29,
                    'menu_id' => 3,
                    'sub_menu_name_am' => 'Տղամարդկանց կոշիկներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            29 =>
                array(
                    'id' => 30,
                    'menu_id' => 3,
                    'sub_menu_name_am' => 'Երեխաների կոշիկներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            30 =>
                array(
                    'id' => 31,
                    'menu_id' => 3,
                    'sub_menu_name_am' => 'Աքսեսուարներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            31 =>
                array(
                    'id' => 32,
                    'menu_id' => 4,
                    'sub_menu_name_am' => 'Պայուսակներ, դրամապանակներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            32 =>
                array(
                    'id' => 33,
                    'menu_id' => 4,
                    'sub_menu_name_am' => 'Տեխնիկայի համար',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            33 =>
                array(
                    'id' => 34,
                    'menu_id' => 4,
                    'sub_menu_name_am' => 'Գոտիներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            34 =>
                array(
                    'id' => 35,
                    'menu_id' => 4,
                    'sub_menu_name_am' => 'Շարֆեր',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            35 =>
                array(
                    'id' => 36,
                    'menu_id' => 4,
                    'sub_menu_name_am' => 'Գլխարկներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            36 =>
                array(
                    'id' => 37,
                    'menu_id' => 4,
                    'sub_menu_name_am' => ' Ձեռնոցներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            37 =>
                array(
                    'id' => 38,
                    'menu_id' => 4,
                    'sub_menu_name_am' => 'Փողկապներ, թաշկինակներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            38 =>
                array(
                    'id' => 39,
                    'menu_id' => 4,
                    'sub_menu_name_am' => 'Այլ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            39 =>
                array(
                    'id' => 40,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Կահույք',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            40 =>
                array(
                    'id' => 41,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Լուսավորություն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            41 =>
                array(
                    'id' => 42,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Տան դեկոր, նորոգում',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            42 =>
                array(
                    'id' => 43,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Խոհանոց, ճաշասենյակ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            43 =>
                array(
                    'id' => 44,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Լոգասենյակ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            44 =>
                array(
                    'id' => 45,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Պահպանում, կազմակերպում',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            45 =>
                array(
                    'id' => 46,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Տեքստիլ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            46 =>
                array(
                    'id' => 47,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Գորգ, կարպետ, գոբելեն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            47 =>
                array(
                    'id' => 48,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Բակ և այգի',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            48 =>
                array(
                    'id' => 49,
                    'menu_id' => 5,
                    'sub_menu_name_am' => 'Գեղեցկություն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            49 =>
                array(
                    'id' => 50,
                    'menu_id' => 6,
                    'sub_menu_name_am' => 'Խաղալիքներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            50 =>
                array(
                    'id' => 51,
                    'menu_id' => 6,
                    'sub_menu_name_am' => 'Փայտե խաղալիքներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            51 =>
                array(
                    'id' => 52,
                    'menu_id' => 6,
                    'sub_menu_name_am' => 'Զարգացման խաղեր',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            52 =>
                array(
                    'id' => 53,
                    'menu_id' => 6,
                    'sub_menu_name_am' => 'Սեղանի խաղեր',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            53 =>
                array(
                    'id' => 54,
                    'menu_id' => 6,
                    'sub_menu_name_am' => 'Փազլ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            54 =>
                array(
                    'id' => 55,
                    'menu_id' => 6,
                    'sub_menu_name_am' => 'Տիկնիկներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            55 =>
                array(
                    'id' => 56,
                    'menu_id' => 6,
                    'sub_menu_name_am' => 'Այլ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            56 =>
                array(
                    'id' => 57,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Հարսանեկան թղթե իրեր',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            57 =>
                array(
                    'id' => 58,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Հարսանեկան դեկորներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            58 =>
                array(
                    'id' => 59,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Հարսանեկան աքսեսուարներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            59 =>
                array(
                    'id' => 60,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Հարսանեկան հագուստ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            60 =>
                array(
                    'id' => 61,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Հարսանեկան զարդեր',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            61 =>
                array(
                    'id' => 62,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Կնունք',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            62 =>
                array(
                    'id' => 63,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Ծննդյան տոներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            63 =>
                array(
                    'id' => 64,
                    'menu_id' => 7,
                    'sub_menu_name_am' => 'Այլ միջոցառումներ',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            64 =>
                array(
                    'id' => 65,
                    'menu_id' => 8,
                    'sub_menu_name_am' => 'Նկարչություն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            65 =>
                array(
                    'id' => 66,
                    'menu_id' => 8,
                    'sub_menu_name_am' => 'Քանդակագործություն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            66 =>
                array(
                    'id' => 67,
                    'menu_id' => 8,
                    'sub_menu_name_am' => 'Փայտագործություն',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            67 =>
                array(
                    'id' => 68,
                    'menu_id' => 8,
                    'sub_menu_name_am' => 'Զարդերի պատրաստում',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            68 =>
                array(
                    'id' => 69,
                    'menu_id' => 8,
                    'sub_menu_name_am' => 'Կարուձև',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            69 =>
                array(
                    'id' => 70,
                    'menu_id' => 8,
                    'sub_menu_name_am' => 'Գործելու համար',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
            70 =>
                array(
                    'id' => 71,
                    'menu_id' => 9,
                    'sub_menu_name_am' => 'Հատուկ առաջարկներ, զեղչեր',
                    'sub_menu_name_ru' => '',
                    'sub_menu_name_en' => ''
                ),
        ));
    }
}
