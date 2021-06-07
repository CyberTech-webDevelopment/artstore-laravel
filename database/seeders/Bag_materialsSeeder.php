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
                    'material_am'=>'Կաշի',
                    'material_ru'=>'',
                    'material_en'=>'Leather'

                ),
            1 =>
                array (
                    'id'=>2,
                    'material_am'=>'Արհեստական կաշի',
                    'material_ru'=>'',
                    'material_en'=>'Faux Leather'

                ),
            2 =>
                array (
                    'id'=>3,
                    'material_am'=>'Թավշակաշի',
                    'material_ru'=>'',
                    'material_en'=>'Suede'

                ),
            3 =>
                array (
                    'id'=>4,
                    'material_am'=>'Արհեստական թավիշ',
                    'material_ru'=>'',
                    'material_en'=>'Faux Suede'

                ),
            4 =>
                array (
                    'id'=>5,
                    'material_am'=>'Ձեռագործ',
                    'material_ru'=>'',
                    'material_en'=>'Manmade'

                ),
            5 =>
                array (
                    'id'=>6,
                    'material_am'=>'Վինիլ',
                    'material_ru'=>'',
                    'material_en'=>'Vinyl'

                ),
            6 =>
                array (
                    'id' => 7,
                    'material_am'=>'Բամբակ',
                    'material_ru'=>'',
                    'material_en'=>'Cotton'
                ),
            7 =>
                array (
                    'id'=>8,
                    'material_am'=>'Գործվածք',
                    'material_ru'=>'',
                    'material_en'=>'Fabric'

                ),
            8 =>
                array (
                    'id'=>9,
                    'material_am'=>'Քաթան',
                    'material_ru'=>'',
                    'material_en'=>'Canvas'

                ),
            9 =>
                array (
                    'id'=>10,
                    'material_am'=>'Ծղոտ',
                    'material_ru'=>'',
                    'material_en'=>'Straw'
                ),
            10 =>
                array (
                    'id'=>11,
                    'material_am'=>'Պոլիկարբոնատ',
                    'material_ru'=>'',
                    'material_en'=>'Polycarbonate'

                ),
            11 =>
                array (
                    'id'=>12,
                    'material_am'=>'Ցանց',
                    'material_ru'=>'',
                    'material_en'=>'Mesh'

                ),
            12 =>
                array (
                    'id'=>13,
                    'material_am'=>'Պլաստիկ',
                    'material_ru'=>'',
                    'material_en'=>'Plastic'
                ),
            13 =>
                array (
                    'id'=>14,
                    'material_am'=>'Դենիմ',
                    'material_ru'=>'',
                    'material_en'=>'Denim'

                ),
            14 =>
                array (
                    'id'=>15,
                    'material_am'=>'Ժակարդ',
                    'material_ru'=>'',
                    'material_en'=>'Jasquard'

                ),
            15 =>
                array (
                    'id'=>16,
                    'material_am'=>'Պոլիամիդ',
                    'material_ru'=>'',
                    'material_en'=>'Polyamide'

                ),
            16 =>
                array (
                    'id'=>17,
                    'material_am'=>'Պոլիպրոպիլեն',
                    'material_ru'=>'',
                    'material_en'=>'Polypropylene'

                ),
            17 =>
                array (
                    'id'=>18,
                    'material_am'=>'Ռայոն',
                    'material_ru'=>'',
                    'material_en'=>'Rayon'

                ),
            18 =>
                array (
                    'id'=>19,
                    'material_am'=>'Թավիշ',
                    'material_ru'=>'',
                    'material_en'=>'Velvet'

                ),
            19 =>
                array (
                    'id'=>20,
                    'material_am'=>'Պոլիեսթեր',
                    'material_ru'=>'',
                    'material_en'=>'Polyester'

                ),
            20 =>
                array (
                    'id'=>21,
                    'material_am'=>'Նեյլոն',
                    'material_ru'=>'',
                    'material_en'=>'Nylon'

                ),
            21 =>
                array (
                    'id'=>22,
                    'material_am'=>'Կերպաս',
                    'material_ru'=>'',
                    'material_en'=>'Satin'

                ),
            22 =>
                array (
                    'id'=>23,
                    'material_am'=>'Թաղիք',
                    'material_ru'=>'',
                    'material_en'=>'Felt'

                ),
            23 =>
                array (
                    'id'=>24,
                    'material_am'=>'Բուրդ',
                    'material_ru'=>'',
                    'material_en'=>'Wool'

                ),
            24 =>
                array (
                    'id'=>25,
                    'material_am'=>'',
                    'material_ru'=>'',
                    'material_en'=>''
                ),
            25 =>
                array (
                    'id'=>26,
                    'material_am'=>'Վուշ',
                    'material_ru'=>'',
                    'material_en'=>'Linen'

                ),
            26 =>
                array (
                    'id'=>27,
                    'material_am'=>'Միկրոֆիբր',
                    'material_ru'=>'',
                    'material_en'=>'Microfiber'

                ),
            27 =>
                array (
                    'id'=>28,
                    'material_am'=>'Փայտ',
                    'material_ru'=>'',
                    'material_en'=>'Wood'

                ),
            28 =>
                array (
                    'id'=>29,
                    'material_am'=>'Պոլիէթիլեն',
                    'material_ru'=>'',
                    'material_en'=>'Polyethylene'

                ),
            29 =>
                array (
                    'id'=>30,
                    'material_am'=>'Մետաքս',
                    'material_ru'=>'',
                    'material_en'=>'Silk'

                ),
            30 =>
                array (
                    'id'=>31,
                    'material_am'=>'Այլ',
                    'material_ru'=>'',
                    'material_en'=>''

                ),
        ));

    }
}
