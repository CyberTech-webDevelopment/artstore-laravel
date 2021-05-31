<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menus')->delete();

        \DB::table('menus')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'menu_name_am' => 'Զարդեր, ժամացույցներ',
                    'menu_name_ru' => 'Украшения и часы',
                    'menu_name_en' => 'Jewelry and watches'
                ),
            1 =>
                array(
                    'id' => 2,
                    'menu_name_am' => 'Արվեստ և ոչ միայն',
                    'menu_name_ru' => 'Искусство',
                    'menu_name_en' => 'Art'
                ),
            2 =>
                array(
                    'id' => 3,
                    'menu_name_am' => 'Հագուկապ',
                    'menu_name_ru' => 'Одежда',
                    'menu_name_en' => 'Clothing'
                ),
            3 =>
                array(
                    'id' => 4,
                    'menu_name_am' => ' Աքսեսուարներ',
                    'menu_name_ru' => 'Аксессуары',
                    'menu_name_en' => 'Accessories'
                ),
            4 =>
                array(
                    'id' => 5,
                    'menu_name_am' => 'Տուն և կենցաղ',
                    'menu_name_ru' => 'Дом и Быт',
                    'menu_name_en' => 'Hom & Living'
                ),
            5 =>
                array(
                    'id' => 6,
                    'menu_name_am' => 'Ժամանց ',
                    'menu_name_ru' => 'Развлечения',
                    'menu_name_en' => 'Entertainment'
                ),
            6 =>
                array(
                    'id' => 7,
                    'menu_name_am' => 'Հարսանիք, միջոցառումներ',
                    'menu_name_ru' => 'Свадьба',
                    'menu_name_en' => 'Wedding/Party'
                ),
            7 =>
                array(
                    'id' => 8,
                    'menu_name_am' => 'Նյութեր գործիքներ',
                    'menu_name_ru' => 'Материалы/инструменты',
                    'menu_name_en' => 'Materials/Tools'
                ),
            8 =>
                array(
                    'id' => 9,
                    'menu_name_am' => 'Առաջարկներ զեղչեր',
                    'menu_name_ru' => 'Предложения/скидки',
                    'menu_name_en' => 'Offers/discounts'
                ),


        ));
    }
}
