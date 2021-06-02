<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sub_categories_sub_menusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_categories_sub_menus')->delete();

        DB::table('sub_categories_sub_menus')->insert(array(
            0 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 1,
                ),
            1 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 1,
                ),
            2 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 1,
                ),
            3 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 1,
                ),
            4 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 1,
                ),
            5 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 1,
                ),
            6 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 1,
                ),
            7 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 1,
                ),
            8 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 1,
                ),
            9 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 1,
                ),
            10 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 1,
                ),
            11 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 1,
                ),
            12 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 2,
                ),
            13 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 2,
                ),
            14 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 2,
                ),
            15 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 2,
                ),
            16 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 2,
                ),
            17 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 2,
                ),
            18 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 2,
                ),
            19 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 2,
                ),
            20 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 2,
                ),
            21 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 2,
                ),
            22 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 2,
                ),
            23 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 2,
                ),
            24 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 3,
                ),
            25 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 3,
                ),
            26 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 3,
                ),
            27 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 3,
                ),
            28 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 3,
                ),
            29 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 3,
                ),
            30 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 3,
                ),
            31 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 3,
                ),
            32 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 3,
                ),
            33 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 3,
                ),
            34 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 3,
                ),
            35 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 3,
                ),
            36 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 4,
                ),
            37 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 4,
                ),
            38 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 4,
                ),
            39 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 4,
                ),
            40 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 4,
                ),
            41 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 4,
                ),
            42 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 4,
                ),
            43 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 4,
                ),
            44 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 4,
                ),
            45 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 4,
                ),
            46 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 4,
                ),
            47 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 4,
                ),
            48 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 5,
                ),
            49 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 5,
                ),
            50 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 5,
                ),
            51 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 5,
                ),
            52 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 5,
                ),
            53 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 5,
                ),
            54 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 5,
                ),
            55 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 5,
                ),
            56 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 5,
                ),
            57 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 5,
                ),
            58 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 5,
                ),
            59 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 5,
                ),
            60 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 6,
                ),
            61 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 6,
                ),
            62 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 6,
                ),
            63 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 6,
                ),
            64 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 6,
                ),
            65 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 6,
                ),
            66 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 6,
                ),
            67 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 6,
                ),
            68 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 6,
                ),
            69 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 6,
                ),
            70 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 6,
                ),
            71 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 6,
                ),
            72 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 7,
                ),
            73 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 7,
                ),
            74 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 7,
                ),
            75 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 7,
                ),
            76 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 7,
                ),
            77 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 7,
                ),
            78 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 7,
                ),
            79 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 7,
                ),
            80 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 7,
                ),
            81 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 7,
                ),
            82 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 7,
                ),
            83 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 7,
                ),
            84 =>
                array(
                    'sub_category_id' => 1,
                    'sub_menu_id' => 8,
                ),
            85 =>
                array(
                    'sub_category_id' => 2,
                    'sub_menu_id' => 8,
                ),
            85 =>
                array(
                    'sub_category_id' => 3,
                    'sub_menu_id' => 8,
                ),
            86 =>
                array(
                    'sub_category_id' => 4,
                    'sub_menu_id' => 8,
                ),
            87 =>
                array(
                    'sub_category_id' => 5,
                    'sub_menu_id' => 8,
                ),
            88 =>
                array(
                    'sub_category_id' => 6,
                    'sub_menu_id' => 8,
                ),
            89 =>
                array(
                    'sub_category_id' => 7,
                    'sub_menu_id' => 8,
                ),
            90 =>
                array(
                    'sub_category_id' => 8,
                    'sub_menu_id' => 8,
                ),
            91 =>
                array(
                    'sub_category_id' => 9,
                    'sub_menu_id' => 8,
                ),
            92 =>
                array(
                    'sub_category_id' => 10,
                    'sub_menu_id' => 8,
                ),
            93 =>
                array(
                    'sub_category_id' => 11,
                    'sub_menu_id' => 8,
                ),
            94 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 8,
                ),
            95 =>
                array(
                    'sub_category_id' => 12,
                    'sub_menu_id' => 10,
                ),
            96 =>
                array(
                    'sub_category_id' => 13,
                    'sub_menu_id' => 9,
                ),
            97 =>
                array(
                    'sub_category_id' => 14,
                    'sub_menu_id' => 9,
                ),
            98 =>
                array(
                    'sub_category_id' => 15,
                    'sub_menu_id' => 9,
                ),
            99 =>
                array(
                    'sub_category_id' => 16,
                    'sub_menu_id' => 9,
                ),
            100 =>
                array(
                    'sub_category_id' => 17,
                    'sub_menu_id' => 9,
                ),
            101 =>
                array(
                    'sub_category_id' => 18,
                    'sub_menu_id' => 9,
                ),
            102 =>
                array(
                    'sub_category_id' => 19,
                    'sub_menu_id' => 11,
                ),
            103 =>
                array(
                    'sub_category_id' => 20,
                    'sub_menu_id' => 11,
                ),
            104 =>
                array(
                    'sub_category_id' => 20,
                    'sub_menu_id' => 14,
                ),
            105 =>
                array(
                    'sub_category_id' => 21,
                    'sub_menu_id' => 14,
                ),
            106 =>
                array(
                    'sub_category_id' => 21,
                    'sub_menu_id' => 11,
                ),
            107 =>
                array(
                    'sub_category_id' => 22,
                    'sub_menu_id' => 11,
                ),
            108 =>
                array(
                    'sub_category_id' => 23,
                    'sub_menu_id' => 11,
                ),
            109 =>
                array(
                    'sub_category_id' => 24,
                    'sub_menu_id' => 11,
                ),
            110 =>
                array(
                    'sub_category_id' => 24,
                    'sub_menu_id' => 12,
                ),
            111 =>
                array(
                    'sub_category_id' => 24,
                    'sub_menu_id' => 13,
                ),
            112 =>
                array(
                    'sub_category_id' => 24,
                    'sub_menu_id' => 14,
                ),
            113 =>
                array(
                    'sub_category_id' => 26,
                    'sub_menu_id' => 12,
                ),
            114 =>
                array(
                    'sub_category_id' => 27,
                    'sub_menu_id' => 12,
                ),
            115 =>
                array(
                    'sub_category_id' => 28,
                    'sub_menu_id' => 13,
                ),
            116 =>
                array(
                    'sub_category_id' => 29,
                    'sub_menu_id' => 13,
                ),
            117 =>
                array(
                    'sub_category_id' => 30,
                    'sub_menu_id' => 13,
                ),
            118 =>
                array(
                    'sub_category_id' => 31,
                    'sub_menu_id' => 14,
                ),
            119 =>
                array(
                    'sub_category_id' => 32,
                    'sub_menu_id' => 14,
                ),
            120 =>
                array(
                    'sub_category_id' => 33,
                    'sub_menu_id' => 14,
                ),
            121 =>
                array(
                    'sub_category_id' => 34,
                    'sub_menu_id' => 14,
                ),
            122 =>
                array(
                    'sub_category_id' => 35,
                    'sub_menu_id' => 14,
                ),
            123 =>
                array(
                    'sub_category_id' => 36,
                    'sub_menu_id' => 14,
                ),
            124 =>
                array(
                    'sub_category_id' => 37,
                    'sub_menu_id' => 14,
                ),
            125 =>
                array(
                    'sub_category_id' => 38,
                    'sub_menu_id' => 14,
                ),
            126 =>
                array(
                    'sub_category_id' => 39,
                    'sub_menu_id' => 14,
                ),
            127 =>
                array(
                    'sub_category_id' => 40,
                    'sub_menu_id' => 15,
                ),
            128 =>
                array(
                    'sub_category_id' => 40,
                    'sub_menu_id' => 16,
                ),
            129 =>
                array(
                    'sub_category_id' => 40,
                    'sub_menu_id' => 17,
                ),
            130 =>
                array(
                    'sub_category_id' => 41,
                    'sub_menu_id' => 15,
                ),
            131 =>
                array(
                    'sub_category_id' => 42,
                    'sub_menu_id' => 15,
                ),
            132 =>
                array(
                    'sub_category_id' => 43,
                    'sub_menu_id' => 15,
                ),
            133 =>
                array(
                    'sub_category_id' => 43,
                    'sub_menu_id' => 16,
                ),
            134 =>
                array(
                    'sub_category_id' => 43,
                    'sub_menu_id' => 18,
                ),
            135 =>
                array(
                    'sub_category_id' => 43,
                    'sub_menu_id' => 20,
                ),
            136 =>
                array(
                    'sub_category_id' => 43,
                    'sub_menu_id' => 21,
                ),
            137 =>
                array(
                    'sub_category_id' => 43,
                    'sub_menu_id' => 22,
                ),
            138 =>
                array(
                    'sub_category_id' => 43,
                    'sub_menu_id' => 23,
                ),
            139 =>
                array(
                    'sub_category_id' => 44,
                    'sub_menu_id' => 15,
                ),
            140 =>
                array(
                    'sub_category_id' => 44,
                    'sub_menu_id' => 16,
                ),
            141 =>
                array(
                    'sub_category_id' => 45,
                    'sub_menu_id' => 15,
                ),
            142 =>
                array(
                    'sub_category_id' => 46,
                    'sub_menu_id' => 16,
                ),
            143 =>
                array(
                    'sub_category_id' => 47,
                    'sub_menu_id' => 16,
                ),
            144 =>
                array(
                    'sub_category_id' => 48,
                    'sub_menu_id' => 16,
                ),
            145 =>
                array(
                    'sub_category_id' => 48,
                    'sub_menu_id' => 18,
                ),
            146 =>
                array(
                    'sub_category_id' => 49,
                    'sub_menu_id' => 17,
                ),
            147 =>
                array(
                    'sub_category_id' => 50,
                    'sub_menu_id' => 18,
                ),
            148 =>
                array(
                    'sub_category_id' => 51,
                    'sub_menu_id' => 18,
                ),
            149 =>
                array(
                    'sub_category_id' => 52,
                    'sub_menu_id' => 18,
                ),
            150 =>
                array(
                    'sub_category_id' => 53,
                    'sub_menu_id' => 18,
                ),
            151 =>
                array(
                    'sub_category_id' => 54,
                    'sub_menu_id' => 18,
                ),
            152 =>
                array(
                    'sub_category_id' => 55,
                    'sub_menu_id' => 18,
                ),
            153 =>
                array(
                    'sub_category_id' => 56,
                    'sub_menu_id' => 18,
                ),
            154 =>
                array(
                    'sub_category_id' => 57,
                    'sub_menu_id' => 19,
                ),
            155 =>
                array(
                    'sub_category_id' => 58,
                    'sub_menu_id' => 19,
                ),
            156 =>
                array(
                    'sub_category_id' => 59,
                    'sub_menu_id' => 19,
                ),
            157 =>
                array(
                    'sub_category_id' => 60,
                    'sub_menu_id' => 19,
                ),
            158 =>
                array(
                    'sub_category_id' => 61,
                    'sub_menu_id' => 19,
                ),
            159 =>
                array(
                    'sub_category_id' => 62,
                    'sub_menu_id' => 20,
                ),
            160 =>
                array(
                    'sub_category_id' => 62,
                    'sub_menu_id' => 21,
                ),
            161 =>
                array(
                    'sub_category_id' => 62,
                    'sub_menu_id' => 22,
                ),
            163 =>
                array(
                    'sub_category_id' => 63,
                    'sub_menu_id' => 22,
                ),
            164 =>
                array(
                    'sub_category_id' => 63,
                    'sub_menu_id' => 21,
                ),
            165 =>
                array(
                    'sub_category_id' => 63,
                    'sub_menu_id' => 20,
                ),
            166 =>
                array(
                    'sub_category_id' => 64,
                    'sub_menu_id' => 21,
                ),
            167 =>
                array(
                    'sub_category_id' => 64,
                    'sub_menu_id' => 22,
                ),
            168 =>
                array(
                    'sub_category_id' => 64,
                    'sub_menu_id' => 23,
                ),
            169 =>
                array(
                    'sub_category_id' => 65,
                    'sub_menu_id' => 23,
                ),
            170 =>
                array(
                    'sub_category_id' => 66,
                    'sub_menu_id' => 24,
                ),
            171 =>
                array(
                    'sub_category_id' => 67,
                    'sub_menu_id' => 24,
                ),
            172 =>
                array(
                    'sub_category_id' => 68,
                    'sub_menu_id' => 24,
                ),
            173 =>
                array(
                    'sub_category_id' => 69,
                    'sub_menu_id' => 24,
                ),
            174 =>
                array(
                    'sub_category_id' => 70,
                    'sub_menu_id' => 24,
                ),
            175 =>
                array(
                    'sub_category_id' => 71,
                    'sub_menu_id' => 24,
                ),
            176 =>
                array(
                    'sub_category_id' => 72,
                    'sub_menu_id' => 24,
                ),
            177 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 11,
                ),
            178 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 12,
                ),
            179 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 13,
                ),
            180 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 14,
                ),
            181 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 15,
                ),
            182 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 16,
                ),
            183 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 17,
                ),
            184 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 18,
                ),
            185 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 19,
                ),
            186 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 20,
                ),
            187 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 21,
                ),
            188 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 22,
                ),
            189 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 23,
                ),
            190 =>
                array(
                    'sub_category_id' => 73,
                    'sub_menu_id' => 24,
                ),
            191 =>
                array(
                    'sub_category_id' => 74,
                    'sub_menu_id' => 25,
                ),
            192 =>
                array(
                    'sub_category_id' => 74,
                    'sub_menu_id' => 26,
                ),
            193 =>
                array(
                    'sub_category_id' => 74,
                    'sub_menu_id' => 27,
                ),
            194 =>
                array(
                    'sub_category_id' => 75,
                    'sub_menu_id' => 25,
                ),
            195 =>
                array(
                    'sub_category_id' => 75,
                    'sub_menu_id' => 27,
                ),
            196 =>
                array(
                    'sub_category_id' => 76,
                    'sub_menu_id' => 27,
                ),
            197 =>
                array(
                    'sub_category_id' => 76,
                    'sub_menu_id' => 26,
                ),
            198 =>
                array(
                    'sub_category_id' => 76,
                    'sub_menu_id' => 25,
                ),
            199 =>
                array(
                    'sub_category_id' => 78,
                    'sub_menu_id' => 26,
                ),
            200 =>
                array(
                    'sub_category_id' => 78,
                    'sub_menu_id' => 25,
                ),
            201 =>
                array(
                    'sub_category_id' => 78,
                    'sub_menu_id' => 27,
                ),
            202 =>
                array(
                    'sub_category_id' => 79,
                    'sub_menu_id' => 26,
                ),
            203 =>
                array(
                    'sub_category_id' => 79,
                    'sub_menu_id' => 25,
                ),
            204 =>
                array(
                    'sub_category_id' => 79,
                    'sub_menu_id' => 27,
                ),
            205 =>
                array(
                    'sub_category_id' => 80,
                    'sub_menu_id' => 26,
                ),
            206 =>
                array(
                    'sub_category_id' => 80,
                    'sub_menu_id' => 25,
                ),
            207 =>
                array(
                    'sub_category_id' => 80,
                    'sub_menu_id' => 27,
                ),
            208 =>
                array(
                    'sub_category_id' => 81,
                    'sub_menu_id' => 25,
                ),
            209 =>
                array(
                    'sub_category_id' => 81,
                    'sub_menu_id' => 27,
                ),
            210 =>
                array(
                    'sub_category_id' => 82,
                    'sub_menu_id' => 28,
                ),
            211 =>
                array(
                    'sub_category_id' => 82,
                    'sub_menu_id' => 29,
                ),
            212 =>
                array(
                    'sub_category_id' => 82,
                    'sub_menu_id' => 30,
                ),
            213 =>
                array(
                    'sub_category_id' => 83,
                    'sub_menu_id' => 28,
                ),
            214 =>
                array(
                    'sub_category_id' => 84,
                    'sub_menu_id' => 28,
                ),
            215 =>
                array(
                    'sub_category_id' => 84,
                    'sub_menu_id' => 29,
                ),
            216 =>
                array(
                    'sub_category_id' => 84,
                    'sub_menu_id' => 30,
                ),
            217 =>
                array(
                    'sub_category_id' => 85,
                    'sub_menu_id' => 28,
                ),
            218 =>
                array(
                    'sub_category_id' => 85,
                    'sub_menu_id' => 29,
                ),
            219 =>
                array(
                    'sub_category_id' => 85,
                    'sub_menu_id' => 30,
                ),
            220 =>
                array(
                    'sub_category_id' => 86,
                    'sub_menu_id' => 28,
                ),
            221 =>
                array(
                    'sub_category_id' => 86,
                    'sub_menu_id' => 29,
                ),
            222 =>
                array(
                    'sub_category_id' => 86,
                    'sub_menu_id' => 30,
                ),
            223 =>
                array(
                    'sub_category_id' => 87,
                    'sub_menu_id' => 28,
                ),
            224 =>
                array(
                    'sub_category_id' => 87,
                    'sub_menu_id' => 29,
                ),
            225 =>
                array(
                    'sub_category_id' => 87,
                    'sub_menu_id' => 30,
                ),
            226 =>
                array(
                    'sub_category_id' => 88,
                    'sub_menu_id' => 30,
                ),
            227 =>
                array(
                    'sub_category_id' => 88,
                    'sub_menu_id' => 28,
                ),
            228 =>
                array(
                    'sub_category_id' => 89,
                    'sub_menu_id' => 30,
                ),
            229 =>
                array(
                    'sub_category_id' => 89,
                    'sub_menu_id' => 28,
                ),
            230 =>
                array(
                    'sub_category_id' => 90,
                    'sub_menu_id' => 30,
                ),
            231 =>
                array(
                    'sub_category_id' => 90,
                    'sub_menu_id' => 29,
                ),
            232 =>
                array(
                    'sub_category_id' => 90,
                    'sub_menu_id' => 28,
                ),
            233 =>
                array(
                    'sub_category_id' => 91,
                    'sub_menu_id' => 31,
                ),
            234 =>
                array(
                    'sub_category_id' => 92,
                    'sub_menu_id' => 31,
                ),
            235 =>
                array(
                    'sub_category_id' => 93,
                    'sub_menu_id' => 31,
                ),
            236 =>
                array(
                    'sub_category_id' => 94,
                    'sub_menu_id' => 31,
                ),
            237 =>
                array(
                    'sub_category_id' => 95,
                    'sub_menu_id' => 31,
                ),
            238 =>
                array(
                    'sub_category_id' => 96,
                    'sub_menu_id' => 31,
                ),
            239 =>
                array(
                    'sub_category_id' => 97,
                    'sub_menu_id' => 31,
                ),
            240 =>
                array(
                    'sub_category_id' => 98,
                    'sub_menu_id' => 31,
                ),
            241 =>
                array(
                    'sub_category_id' => 99,
                    'sub_menu_id' => 31,
                ),
            242 =>
                array(
                    'sub_category_id' => 99,
                    'sub_menu_id' => 30,
                ),
            243 =>
                array(
                    'sub_category_id' => 99,
                    'sub_menu_id' => 29,
                ),
            244 =>
                array(
                    'sub_category_id' => 99,
                    'sub_menu_id' => 28,
                ),
            245 =>
                array(
                    'sub_category_id' => 99,
                    'sub_menu_id' => 27,
                ),
            246 =>
                array(
                    'sub_category_id' => 99,
                    'sub_menu_id' => 26,
                ),
            247 =>
                array(
                    'sub_category_id' => 99,
                    'sub_menu_id' => 25,
                ),
            248 =>
                array(
                    'sub_category_id' => 100,
                    'sub_menu_id' => 32,
                ),
            249 =>
                array(
                    'sub_category_id' => 101,
                    'sub_menu_id' => 32,
                ),
            250 =>
                array(
                    'sub_category_id' => 102,
                    'sub_menu_id' => 32,
                ),
            251 =>
                array(
                    'sub_category_id' => 103,
                    'sub_menu_id' => 32,
                ),
            252 =>
                array(
                    'sub_category_id' => 105,
                    'sub_menu_id' => 32,
                ),
            253 =>
                array(
                    'sub_category_id' => 106,
                    'sub_menu_id' => 32,
                ),
            254 =>
                array(
                    'sub_category_id' => 107,
                    'sub_menu_id' => 32,
                ),
            255 =>
                array(
                    'sub_category_id' => 108,
                    'sub_menu_id' => 32,
                ),
            256 =>
                array(
                    'sub_category_id' => 109,
                    'sub_menu_id' => 32,
                ),
            257 =>
                array(
                    'sub_category_id' => 110,
                    'sub_menu_id' => 32,
                ),
            258 =>
                array(
                    'sub_category_id' => 111,
                    'sub_menu_id' => 32,
                ),
            259 =>
                array(
                    'sub_category_id' => 112,
                    'sub_menu_id' => 32,
                ),
            260 =>
                array(
                    'sub_category_id' => 112,
                    'sub_menu_id' => 33,
                ),
            261 =>
                array(
                    'sub_category_id' => 113,
                    'sub_menu_id' => 32,
                ),
            262 =>
                array(
                    'sub_category_id' => 114,
                    'sub_menu_id' => 32,
                ),
            263 =>
                array(
                    'sub_category_id' => 115,
                    'sub_menu_id' => 33,
                ),
            264 =>
                array(
                    'sub_category_id' => 116,
                    'sub_menu_id' => 33,
                ),
            265 =>
                array(
                    'sub_category_id' => 117,
                    'sub_menu_id' => 33,
                ),
            266 =>
                array(
                    'sub_category_id' => 118,
                    'sub_menu_id' => 34,
                ),
            267 =>
                array(
                    'sub_category_id' => 119,
                    'sub_menu_id' => 34,
                ),
            268 =>
                array(
                    'sub_category_id' => 120,
                    'sub_menu_id' => 34,
                ),
            269 =>
                array(
                    'sub_category_id' => 121,
                    'sub_menu_id' => 34,
                ),
            270 =>
                array(
                    'sub_category_id' => 122,
                    'sub_menu_id' => 34,
                ),
            271 =>
                array(
                    'sub_category_id' => 123,
                    'sub_menu_id' => 35,
                ),
            272 =>
                array(
                    'sub_category_id' => 124,
                    'sub_menu_id' => 35,
                ),
            273 =>
                array(
                    'sub_category_id' => 125,
                    'sub_menu_id' => 35,
                ),
            274 =>
                array(
                    'sub_category_id' => 126,
                    'sub_menu_id' => 35,
                ),
            275 =>
                array(
                    'sub_category_id' => 127,
                    'sub_menu_id' => 35,
                ),
            276 =>
                array(
                    'sub_category_id' => 128,
                    'sub_menu_id' => 35,
                ),
            277 =>
                array(
                    'sub_category_id' => 129,
                    'sub_menu_id' => 35,
                ),
            278 =>
                array(
                    'sub_category_id' => 130,
                    'sub_menu_id' => 35,
                ),
            279 =>
                array(
                    'sub_category_id' => 130,
                    'sub_menu_id' => 36,
                ),
            280 =>
                array(
                    'sub_category_id' => 130,
                    'sub_menu_id' => 37,
                ),
            281 =>
                array(
                    'sub_category_id' => 131,
                    'sub_menu_id' => 36,
                ),
            282 =>
                array(
                    'sub_category_id' => 132,
                    'sub_menu_id' => 36,
                ),
            283 =>
                array(
                    'sub_category_id' => 133,
                    'sub_menu_id' => 36,
                ),
            284 =>
                array(
                    'sub_category_id' => 134,
                    'sub_menu_id' => 36,
                ),
            285 =>
                array(
                    'sub_category_id' => 135,
                    'sub_menu_id' => 36,
                ),
            286 =>
                array(
                    'sub_category_id' => 136,
                    'sub_menu_id' => 36,
                ),
            287 =>
                array(
                    'sub_category_id' => 137,
                    'sub_menu_id' => 36,
                ),
            288 =>
                array(
                    'sub_category_id' => 138,
                    'sub_menu_id' => 36,
                ),
            289 =>
                array(
                    'sub_category_id' => 139,
                    'sub_menu_id' => 37,
                ),
            290 =>
                array(
                    'sub_category_id' => 140,
                    'sub_menu_id' => 37,
                ),
            291 =>
                array(
                    'sub_category_id' => 141,
                    'sub_menu_id' => 37,
                ),
            292 =>
                array(
                    'sub_category_id' => 142,
                    'sub_menu_id' => 37,
                ),
            293 =>
                array(
                    'sub_category_id' => 143,
                    'sub_menu_id' => 38,
                ),
            294 =>
                array(
                    'sub_category_id' => 144,
                    'sub_menu_id' => 38,
                ),
            295 =>
                array(
                    'sub_category_id' => 145,
                    'sub_menu_id' => 38,
                ),
            296 =>
                array(
                    'sub_category_id' => 146,
                    'sub_menu_id' => 38,
                ),
            297 =>
                array(
                    'sub_category_id' => 147,
                    'sub_menu_id' => 39,
                ),
            298 =>
                array(
                    'sub_category_id' => 148,
                    'sub_menu_id' => 39,
                ),
            299 =>
                array(
                    'sub_category_id' => 149,
                    'sub_menu_id' => 39,
                ),
            300 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 32,
                ),
            301 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 33,
                ),
            302 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 34,
                ),
            303 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 35,
                ),
            304 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 36,
                ),
            305 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 37,
                ),
            306 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 38,
                ),
            307 =>
                array(
                    'sub_category_id' => 150,
                    'sub_menu_id' => 39,
                ),
            308 =>
                array(
                    'sub_category_id' => 151,
                    'sub_menu_id' => 40,
                ),
            309 =>
                array(
                    'sub_category_id' => 152,
                    'sub_menu_id' => 40,
                ),
            310 =>
                array(
                    'sub_category_id' => 153,
                    'sub_menu_id' => 40,
                ),
            311 =>
                array(
                    'sub_category_id' => 154,
                    'sub_menu_id' => 40,
                ),
            312 =>
                array(
                    'sub_category_id' => 155,
                    'sub_menu_id' => 40
                ),
            313 =>
                array(
                    'sub_category_id' => 156,
                    'sub_menu_id' => 40
                ),
            314 =>
                array(
                    'sub_category_id' => 157,
                    'sub_menu_id' => 40
                ),
            315 =>
                array(
                    'sub_category_id' => 158,
                    'sub_menu_id' => 41
                ),
            316 =>
                array(
                    'sub_category_id' => 159,
                    'sub_menu_id' => 41
                ),
            317 =>
                array(
                    'sub_category_id' => 160,
                    'sub_menu_id' => 41
                ),
            318 =>
                array(
                    'sub_category_id' => 161,
                    'sub_menu_id' => 41
                ),
            319 =>
                array(
                    'sub_category_id' => 162,
                    'sub_menu_id' => 41
                ),
            320 =>
                array(
                    'sub_category_id' => 163,
                    'sub_menu_id' => 41
                ),
            321 =>
                array(
                    'sub_category_id' => 164,
                    'sub_menu_id' => 41
                ),
            322 =>
                array(
                    'sub_category_id' => 165,
                    'sub_menu_id' => 41
                ),
            323 =>
                array(
                    'sub_category_id' => 166,
                    'sub_menu_id' => 41
                ),
            324 =>
                array(
                    'sub_category_id' => 167,
                    'sub_menu_id' => 41
                ),
            325 =>
                array(
                    'sub_category_id' => 168,
                    'sub_menu_id' => 41
                ),
            326 =>
                array(
                    'sub_category_id' => 169,
                    'sub_menu_id' => 42
                ),
            327 =>
                array(
                    'sub_category_id' => 170,
                    'sub_menu_id' => 42
                ),
            328 =>
                array(
                    'sub_category_id' => 171,
                    'sub_menu_id' => 42
                ),
            329 =>
                array(
                    'sub_category_id' => 172,
                    'sub_menu_id' => 42
                ),
            330 =>
                array(
                    'sub_category_id' => 173,
                    'sub_menu_id' => 42
                ),
            331 =>
                array(
                    'sub_category_id' => 174,
                    'sub_menu_id' => 42
                ),
            332 =>
                array(
                    'sub_category_id' => 175,
                    'sub_menu_id' => 42
                ),
            333 =>
                array(
                    'sub_category_id' => 176,
                    'sub_menu_id' => 42
                ),
            334 =>
                array(
                    'sub_category_id' => 177,
                    'sub_menu_id' => 42
                ),
            335 =>
                array(
                    'sub_category_id' => 178,
                    'sub_menu_id' => 42
                ),
            336 =>
                array(
                    'sub_category_id' => 179,
                    'sub_menu_id' => 42
                ),
            337 =>
                array(
                    'sub_category_id' => 180,
                    'sub_menu_id' => 42
                ),
            338 =>
                array(
                    'sub_category_id' => 181,
                    'sub_menu_id' => 42
                ),
            339 =>
                array(
                    'sub_category_id' => 182,
                    'sub_menu_id' => 42
                ),
            340 =>
                array(
                    'sub_category_id' => 183,
                    'sub_menu_id' => 43
                ),
            341 =>
                array(
                    'sub_category_id' => 184,
                    'sub_menu_id' => 43
                ),
            342 =>
                array(
                    'sub_category_id' => 185,
                    'sub_menu_id' => 43
                ),
            343 =>
                array(
                    'sub_category_id' => 186,
                    'sub_menu_id' => 43
                ),
            344 =>
                array(
                    'sub_category_id' => 187,
                    'sub_menu_id' => 43
                ),
            345 =>
                array(
                    'sub_category_id' => 188,
                    'sub_menu_id' => 43
                ),
            346 =>
                array(
                    'sub_category_id' => 189,
                    'sub_menu_id' => 43
                ),
            347 =>
                array(
                    'sub_category_id' => 190,
                    'sub_menu_id' => 43
                ),
            348 =>
                array(
                    'sub_category_id' => 191,
                    'sub_menu_id' => 43
                ),
            349 =>
                array(
                    'sub_category_id' => 192,
                    'sub_menu_id' => 43
                ),
            350 =>
                array(
                    'sub_category_id' => 194,
                    'sub_menu_id' => 43
                ),
            351 =>
                array(
                    'sub_category_id' => 195,
                    'sub_menu_id' => 43
                ),
            352 =>
                array(
                    'sub_category_id' => 195,
                    'sub_menu_id' => 44
                ),
            353 =>
                array(
                    'sub_category_id' => 196,
                    'sub_menu_id' => 44
                ),
            354 =>
                array(
                    'sub_category_id' => 197,
                    'sub_menu_id' => 44
                ),
            355 =>
                array(
                    'sub_category_id' => 198,
                    'sub_menu_id' => 44
                ),
            356 =>
                array(
                    'sub_category_id' => 199,
                    'sub_menu_id' => 44
                ),
            357 =>
                array(
                    'sub_category_id' => 200,
                    'sub_menu_id' => 44
                ),
            358 =>
                array(
                    'sub_category_id' => 201,
                    'sub_menu_id' => 44
                ),
            359 =>
                array(
                    'sub_category_id' => 202,
                    'sub_menu_id' => 44
                ),
            360 =>
                array(
                    'sub_category_id' => 203,
                    'sub_menu_id' => 44
                ),
            361 =>
                array(
                    'sub_category_id' => 204,
                    'sub_menu_id' => 44
                ),
            362 =>
                array(
                    'sub_category_id' => 205,
                    'sub_menu_id' => 44
                ),
            363 =>
                array(
                    'sub_category_id' => 206,
                    'sub_menu_id' => 45
                ),
            364 =>
                array(
                    'sub_category_id' => 207,
                    'sub_menu_id' => 45
                ),
            365 =>
                array(
                    'sub_category_id' => 208,
                    'sub_menu_id' => 45
                ),
            366 =>
                array(
                    'sub_category_id' => 209,
                    'sub_menu_id' => 45
                ),
            367 =>
                array(
                    'sub_category_id' => 210,
                    'sub_menu_id' => 46
                ),
            368 =>
                array(
                    'sub_category_id' => 211,
                    'sub_menu_id' => 46
                ),
            369 =>
                array(
                    'sub_category_id' => 212,
                    'sub_menu_id' => 46
                ),
            370 =>
                array(
                    'sub_category_id' => 213,
                    'sub_menu_id' => 46
                ),
            371 =>
                array(
                    'sub_category_id' => 214,
                    'sub_menu_id' => 46
                ),
            372 =>
                array(
                    'sub_category_id' => 215,
                    'sub_menu_id' => 46
                ),
            373 =>
                array(
                    'sub_category_id' => 216,
                    'sub_menu_id' => 46
                ),
            374 =>
                array(
                    'sub_category_id' => 217,
                    'sub_menu_id' => 46
                ),
            375 =>
                array(
                    'sub_category_id' => 218,
                    'sub_menu_id' => 46
                ),
            376 =>
                array(
                    'sub_category_id' => 219,
                    'sub_menu_id' => 47
                ),
            377 =>
                array(
                    'sub_category_id' => 220,
                    'sub_menu_id' => 47
                ),
            378 =>
                array(
                    'sub_category_id' => 221,
                    'sub_menu_id' => 47
                ),
            379 =>
                array(
                    'sub_category_id' => 222,
                    'sub_menu_id' => 47
                ),
            380 =>
                array(
                    'sub_category_id' => 223,
                    'sub_menu_id' => 47
                ),
            381 =>
                array(
                    'sub_category_id' => 224,
                    'sub_menu_id' => 47
                ),
            382 =>
                array(
                    'sub_category_id' => 225,
                    'sub_menu_id' => 48
                ),
            383 =>
                array(
                    'sub_category_id' => 226,
                    'sub_menu_id' => 48
                ),
            384 =>
                array(
                    'sub_category_id' => 227,
                    'sub_menu_id' => 48
                ),
            385 =>
                array(
                    'sub_category_id' => 228,
                    'sub_menu_id' => 48
                ),
            386 =>
                array(
                    'sub_category_id' => 229,
                    'sub_menu_id' => 48
                ),
            387 =>
                array(
                    'sub_category_id' => 230,
                    'sub_menu_id' => 48
                ),
            388 =>
                array(
                    'sub_category_id' => 231,
                    'sub_menu_id' => 48
                ),
            389 =>
                array(
                    'sub_category_id' => 232,
                    'sub_menu_id' => 48
                ),
            390 =>
                array(
                    'sub_category_id' => 233,
                    'sub_menu_id' => 48
                ),
            391 =>
                array(
                    'sub_category_id' => 234,
                    'sub_menu_id' => 49
                ),
            392 =>
                array(
                    'sub_category_id' => 235,
                    'sub_menu_id' => 49
                ),
            393 =>
                array(
                    'sub_category_id' => 236,
                    'sub_menu_id' => 49
                ),
            394 =>
                array(
                    'sub_category_id' => 237,
                    'sub_menu_id' => 49
                ),
            395 =>
                array(
                    'sub_category_id' => 238,
                    'sub_menu_id' => 49
                ),
            396 =>
                array(
                    'sub_category_id' => 239,
                    'sub_menu_id' => 49
                ),
            397 =>
                array(
                    'sub_category_id' => 240,
                    'sub_menu_id' => 49
                ),
            398 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 40
                ),
            399 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 41
                ),
            400 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 43
                ),
            401 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 44
                ),
            402 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 45
                ),
            403 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 46
                ),
            404 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 47
                ),
            405 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 48
                ),
            406 =>
                array(
                    'sub_category_id' => 241,
                    'sub_menu_id' => 49
                ),
            407 =>
                array(
                    'sub_category_id' => 242,
                    'sub_menu_id' => 55
                ),
            408 =>
                array(
                    'sub_category_id' => 243,
                    'sub_menu_id' => 55
                ),
            409 =>
                array(
                    'sub_category_id' => 244,
                    'sub_menu_id' => 57
                ),
            410 =>
                array(
                    'sub_category_id' => 245,
                    'sub_menu_id' => 57
                ),
            411 =>
                array(
                    'sub_category_id' => 246,
                    'sub_menu_id' => 57
                ),
            412 =>
                array(
                    'sub_category_id' => 247,
                    'sub_menu_id' => 57
                ),
            413 =>
                array(
                    'sub_category_id' => 248,
                    'sub_menu_id' => 58
                ),
            414 =>
                array(
                    'sub_category_id' => 250,
                    'sub_menu_id' => 58
                ),
            415 =>
                array(
                    'sub_category_id' => 251,
                    'sub_menu_id' => 58
                ),
            416 =>
                array(
                    'sub_category_id' => 252,
                    'sub_menu_id' => 58
                ),
            417 =>
                array(
                    'sub_category_id' => 253,
                    'sub_menu_id' => 58
                ),
            418 =>
                array(
                    'sub_category_id' => 254,
                    'sub_menu_id' => 58
                ),
            419 =>
                array(
                    'sub_category_id' => 255,
                    'sub_menu_id' => 59
                ),
            420 =>
                array(
                    'sub_category_id' => 255,
                    'sub_menu_id' => 60
                ),
            421 =>
                array(
                    'sub_category_id' => 256,
                    'sub_menu_id' => 59
                ),
            422 =>
                array(
                    'sub_category_id' => 256,
                    'sub_menu_id' => 60
                ),
            423 =>
                array(
                    'sub_category_id' => 257,
                    'sub_menu_id' => 59
                ),
            424 =>
                array(
                    'sub_category_id' => 257,
                    'sub_menu_id' => 60
                ),
            425 =>
                array(
                    'sub_category_id' => 258,
                    'sub_menu_id' => 59
                ),
            426 =>
                array(
                    'sub_category_id' => 258,
                    'sub_menu_id' => 60
                ),
            427 =>
                array(
                    'sub_category_id' => 259,
                    'sub_menu_id' => 59
                ),
            428 =>
                array(
                    'sub_category_id' => 259,
                    'sub_menu_id' => 60
                ),
            429 =>
                array(
                    'sub_category_id' => 260,
                    'sub_menu_id' => 59
                ),
            430 =>
                array(
                    'sub_category_id' => 260,
                    'sub_menu_id' => 60
                ),
            431 =>
                array(
                    'sub_category_id' => 261,
                    'sub_menu_id' => 59
                ),
            432 =>
                array(
                    'sub_category_id' => 261,
                    'sub_menu_id' => 60
                ),
            433 =>
                array(
                    'sub_category_id' => 262,
                    'sub_menu_id' => 59
                ),
            434 =>
                array(
                    'sub_category_id' => 263,
                    'sub_menu_id' => 59
                ),
            435 =>
                array(
                    'sub_category_id' => 264,
                    'sub_menu_id' => 59
                ),
            436 =>
                array(
                    'sub_category_id' => 265,
                    'sub_menu_id' => 59
                ),
            437 =>
                array(
                    'sub_category_id' => 266,
                    'sub_menu_id' => 60
                ),
            438 =>
                array(
                    'sub_category_id' => 267,
                    'sub_menu_id' => 60
                ),
            439 =>
                array(
                    'sub_category_id' => 268,
                    'sub_menu_id' => 61
                ),
            440 =>
                array(
                    'sub_category_id' => 270,
                    'sub_menu_id' => 61
                ),
            441 =>
                array(
                    'sub_category_id' => 271,
                    'sub_menu_id' => 61
                ),
            442 =>
                array(
                    'sub_category_id' => 272,
                    'sub_menu_id' => 61
                ),
            443 =>
                array(
                    'sub_category_id' => 273,
                    'sub_menu_id' => 61
                ),
            444 =>
                array(
                    'sub_category_id' => 274,
                    'sub_menu_id' => 61
                ),
            445 =>
                array(
                    'sub_category_id' => 275,
                    'sub_menu_id' => 61
                ),
            446 =>
                array(
                    'sub_category_id' => 276,
                    'sub_menu_id' => 61
                ),
            447 =>
                array(
                    'sub_category_id' => 277,
                    'sub_menu_id' => 61
                ),
            448 =>
                array(
                    'sub_category_id' => 278,
                    'sub_menu_id' => 61
                ),
            449 =>
                array(
                    'sub_category_id' => 279,
                    'sub_menu_id' => 62
                ),
            450 =>
                array(
                    'sub_category_id' => 280,
                    'sub_menu_id' => 62
                ),
            451 =>
                array(
                    'sub_category_id' => 281,
                    'sub_menu_id' => 62
                ),
            452 =>
                array(
                    'sub_category_id' => 281,
                    'sub_menu_id' => 63
                ),
            453 =>
                array(
                    'sub_category_id' => 281,
                    'sub_menu_id' => 64
                ),
            454 =>
                array(
                    'sub_category_id' => 282,
                    'sub_menu_id' => 62
                ),
            455 =>
                array(
                    'sub_category_id' => 282,
                    'sub_menu_id' => 63
                ),
            456 =>
                array(
                    'sub_category_id' => 282,
                    'sub_menu_id' => 64
                ),
            457 =>
                array(
                    'sub_category_id' => 283,
                    'sub_menu_id' => 62
                ),
            458 =>
                array(
                    'sub_category_id' => 283,
                    'sub_menu_id' => 63
                ),
            459 =>
                array(
                    'sub_category_id' => 283,
                    'sub_menu_id' => 64
                ),
            460 =>
                array(
                    'sub_category_id' => 286,
                    'sub_menu_id' => 62
                ),
            461 =>
                array(
                    'sub_category_id' => 286,
                    'sub_menu_id' => 63
                ),
            462 =>
                array(
                    'sub_category_id' => 286,
                    'sub_menu_id' => 64
                ),
            463 =>
                array(
                    'sub_category_id' => 287,
                    'sub_menu_id' => 62
                ),
            464 =>
                array(
                    'sub_category_id' => 287,
                    'sub_menu_id' => 63
                ),
            465 =>
                array(
                    'sub_category_id' => 287,
                    'sub_menu_id' => 64
                ),
            466 =>
                array(
                    'sub_category_id' => 288,
                    'sub_menu_id' => 62
                ),
            467 =>
                array(
                    'sub_category_id' => 288,
                    'sub_menu_id' => 63
                ),
            468 =>
                array(
                    'sub_category_id' => 288,
                    'sub_menu_id' => 64
                ),
            469 =>
                array(
                    'sub_category_id' => 289,
                    'sub_menu_id' => 62
                ),
            470 =>
                array(
                    'sub_category_id' => 289,
                    'sub_menu_id' => 63
                ),
            471 =>
                array(
                    'sub_category_id' => 289,
                    'sub_menu_id' => 64
                ),
            472 =>
                array(
                    'sub_category_id' => 290,
                    'sub_menu_id' => 62
                ),
            473 =>
                array(
                    'sub_category_id' => 291,
                    'sub_menu_id' => 62
                ),
            474 =>
                array(
                    'sub_category_id' => 292,
                    'sub_menu_id' => 57
                ),
            475 =>
                array(
                    'sub_category_id' => 292,
                    'sub_menu_id' => 58
                ),
            476 =>
                array(
                    'sub_category_id' => 292,
                    'sub_menu_id' => 59
                ),
            477 =>
                array(
                    'sub_category_id' => 292,
                    'sub_menu_id' => 60
                ),
            478 =>
                array(
                    'sub_category_id' => 292,
                    'sub_menu_id' => 61
                ),
            479 =>
                array(
                    'sub_category_id' => 292,
                    'sub_menu_id' => 62
                ),
            480 =>
                array(
                    'sub_category_id' => 293,
                    'sub_menu_id' => 65
                ),
            481 =>
                array(
                    'sub_category_id' => 294,
                    'sub_menu_id' => 65
                ),
            482 =>
                array(
                    'sub_category_id' => 295,
                    'sub_menu_id' => 65
                ),
            483 =>
                array(
                    'sub_category_id' => 296,
                    'sub_menu_id' => 65
                ),
            484 =>
                array(
                    'sub_category_id' => 297,
                    'sub_menu_id' => 65
                ),
            485 =>
                array(
                    'sub_category_id' => 298,
                    'sub_menu_id' => 65
                ),
            486 =>
                array(
                    'sub_category_id' => 299,
                    'sub_menu_id' => 65
                ),
            487 =>
                array(
                    'sub_category_id' => 300,
                    'sub_menu_id' => 65
                ),
            488 =>
                array(
                    'sub_category_id' => 301,
                    'sub_menu_id' => 65
                ),
            489 =>
                array(
                    'sub_category_id' => 302,
                    'sub_menu_id' => 65
                ),
            490 =>
                array(
                    'sub_category_id' => 302,
                    'sub_menu_id' => 66
                ),
            491 =>
                array(
                    'sub_category_id' => 302,
                    'sub_menu_id' => 67
                ),
            492 =>
                array(
                    'sub_category_id' => 302,
                    'sub_menu_id' => 68
                ),
            493 =>
                array(
                    'sub_category_id' => 302,
                    'sub_menu_id' => 70
                ),
            494 =>
                array(
                    'sub_category_id' => 303,
                    'sub_menu_id' => 65
                ),
            495 =>
                array(
                    'sub_category_id' => 305,
                    'sub_menu_id' => 65
                ),
            496 =>
                array(
                    'sub_category_id' => 305,
                    'sub_menu_id' => 66
                ),
            497 =>
                array(
                    'sub_category_id' => 305,
                    'sub_menu_id' => 67
                ),
            498 =>
                array(
                    'sub_category_id' => 305,
                    'sub_menu_id' => 68
                ),
            499 =>
                array(
                    'sub_category_id' => 305,
                    'sub_menu_id' => 69
                ),
            500 =>
                array(
                    'sub_category_id' => 305,
                    'sub_menu_id' => 70
                ),
            501 =>
                array(
                    'sub_category_id' => 306,
                    'sub_menu_id' => 66
                ),
            502 =>
                array(
                    'sub_category_id' => 307,
                    'sub_menu_id' => 66
                ),
            503 =>
                array(
                    'sub_category_id' => 308,
                    'sub_menu_id' => 66
                ),
            504 =>
                array(
                    'sub_category_id' => 309,
                    'sub_menu_id' => 67
                ),
            505 =>
                array(
                    'sub_category_id' => 310,
                    'sub_menu_id' => 68
                ),
            506 =>
                array(
                    'sub_category_id' => 311,
                    'sub_menu_id' => 68
                ),
            507 =>
                array(
                    'sub_category_id' => 312,
                    'sub_menu_id' => 68
                ),
            508 =>
                array(
                    'sub_category_id' => 312,
                    'sub_menu_id' => 70
                ),
            509 =>
                array(
                    'sub_category_id' => 313,
                    'sub_menu_id' => 69
                ),
            510 =>
                array(
                    'sub_category_id' => 314,
                    'sub_menu_id' => 69
                ),
            511 =>
                array(
                    'sub_category_id' => 315,
                    'sub_menu_id' => 69
                ),
            512 =>
                array(
                    'sub_category_id' => 315,
                    'sub_menu_id' => 70
                ),
            513 =>
                array(
                    'sub_category_id' => 316,
                    'sub_menu_id' => 69
                ),
            514 =>
                array(
                    'sub_category_id' => 316,
                    'sub_menu_id' => 70
                ),
            515 =>
                array(
                    'sub_category_id' => 317,
                    'sub_menu_id' => 69
                ),
            516 =>
                array(
                    'sub_category_id' => 318,
                    'sub_menu_id' => 65
                ),
            517 =>
                array(
                    'sub_category_id' => 318,
                    'sub_menu_id' => 66
                ),
            518 =>
                array(
                    'sub_category_id' => 318,
                    'sub_menu_id' => 67
                ),
            519 =>
                array(
                    'sub_category_id' => 318,
                    'sub_menu_id' => 68
                ),
            520 =>
                array(
                    'sub_category_id' => 318,
                    'sub_menu_id' => 69
                ),
            521 =>
                array(
                    'sub_category_id' => 318,
                    'sub_menu_id' => 70
                ),


        ));
    }
}
