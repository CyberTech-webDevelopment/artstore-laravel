<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Bag_materialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('bag_materials')->delete();

        \DB::table('bag_materials')->insert(array (
            0 =>
                array (
                    'id'=>1,
                    'bag_material_am'=>'Կաշի',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Leather'

                ),
            1 =>
                array (
                    'id'=>2,
                    'bag_material_am'=>'Արհեստական կաշի',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Faux Leather'

                ),
            2 =>
                array (
                    'id'=>3,
                    'bag_material_am'=>'Թավշակաշի',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Suede'

                ),
            3 =>
                array (
                    'id'=>4,
                    'bag_material_am'=>'Արհեստական թավիշ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Faux Suede'

                ),
            4 =>
                array (
                    'id'=>5,
                    'bag_material_am'=>'Ձեռագործ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Manmade'

                ),
            5 =>
                array (
                    'id'=>6,
                    'bag_material_am'=>'Վինիլ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Vinyl'

                ),
            6 =>
                array (
                    'id' => 7,
                    'bag_material_am'=>'Բամբակ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Cotton'
                ),
            7 =>
                array (
                    'id'=>8,
                    'bag_material_am'=>'Գործվածք',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Fabric'

                ),
            8 =>
                array (
                    'id'=>9,
                    'bag_material_am'=>'Քաթան',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Canvas'

                ),
            9 =>
                array (
                    'id'=>10,
                    'bag_material_am'=>'Ծղոտ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Straw'
                ),
            10 =>
                array (
                    'id'=>11,
                    'bag_material_am'=>'Պոլիկարբոնատ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Polycarbonate'

                ),
            11 =>
                array (
                    'id'=>12,
                    'bag_material_am'=>'Ցանց',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Mesh'

                ),
            12 =>
                array (
                    'id'=>13,
                    'bag_material_am'=>'Պլաստիկ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Plastic'
                ),
            13 =>
                array (
                    'id'=>14,
                    'bag_material_am'=>'Դենիմ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Denim'

                ),
            14 =>
                array (
                    'id'=>15,
                    'bag_material_am'=>'Ժակարդ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Jasquard'

                ),
            15 =>
                array (
                    'id'=>16,
                    'bag_material_am'=>'Պոլիամիդ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Polyamide'

                ),
            16 =>
                array (
                    'id'=>17,
                    'bag_material_am'=>'Պոլիպրոպիլեն',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Polypropylene'

                ),
            17 =>
                array (
                    'id'=>18,
                    'bag_material_am'=>'Ռայոն',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Rayon'

                ),
            18 =>
                array (
                    'id'=>19,
                    'bag_material_am'=>'Թավիշ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Velvet'

                ),
            19 =>
                array (
                    'id'=>20,
                    'bag_material_am'=>'Պոլիեսթեր',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Polyester'

                ),
            20 =>
                array (
                    'id'=>21,
                    'bag_material_am'=>'Նեյլոն',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Nylon'

                ),
            21 =>
                array (
                    'id'=>22,
                    'bag_material_am'=>'Կերպաս',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Satin'

                ),
            22 =>
                array (
                    'id'=>23,
                    'bag_material_am'=>'Թաղիք',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Felt'

                ),
            23 =>
                array (
                    'id'=>24,
                    'bag_material_am'=>'Բուրդ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Wool'

                ),
            24 =>
                array (
                    'id'=>25,
                    'bag_material_am'=>'',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>''
                ),
            25 =>
                array (
                    'id'=>26,
                    'bag_material_am'=>'Վուշ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Linen'

                ),
            26 =>
                array (
                    'id'=>27,
                    'bag_material_am'=>'Միկրոֆիբր',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Microfiber'

                ),
            27 =>
                array (
                    'id'=>28,
                    'bag_material_am'=>'Փայտ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Wood'

                ),
            28 =>
                array (
                    'id'=>29,
                    'bag_material_am'=>'Պոլիէթիլեն',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Polyethylene'

                ),
            29 =>
                array (
                    'id'=>30,
                    'bag_material_am'=>'Մետաքս',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>'Silk'

                ),
            30 =>
                array (
                    'id'=>31,
                    'bag_material_am'=>'Այլ',
                    'bag_material_ru'=>'',
                    'bag_material_en'=>''

                ),
        ));

    }
}
