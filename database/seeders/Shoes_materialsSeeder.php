<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Shoes_materialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('shoes_materials')->delete();

        \DB::table('shoes_materials')->insert(array(
            0 =>
                array(
                    'id'=>1,
                    'shoes_material_am'=>'Կաշի',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Leather'
                ),
            1 =>
                array(
                    'id'=>2,
                    'shoes_material_am'=>'Լաքապատ կաշի',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Patent Leather'
                ),
            2 =>
                array(
                    'id'=>3,
                    'shoes_material_am'=>'Արհեստական կաշվե',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Faux Leather'
                ),
            3 =>
                array(
                    'id'=>4,
                    'shoes_material_am'=>'Ձեռագործ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Manmade'
                ),
            4 =>
                array(
                    'id'=>5,
                    'shoes_material_am'=>'Գործվածք',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Fabric'
                ),
            5 =>
                array(
                    'id'=>6,
                    'shoes_material_am'=>'Թավշակաշի',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Suede'
                ),
            6 =>
                array(
                    'id'=>7,
                    'shoes_material_am'=>'Քաթանե',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Canvas'
                ),
            7 =>
                array(
                    'id'=>8,
                    'shoes_material_am'=>'Նուբուկ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Nubuck'
                ),
            8 =>
                array(
                    'id'=>9,
                    'shoes_material_am'=>'Ռետինե',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Rubber'
                ),
            9 =>
                array(
                    'id'=>10,
                    'shoes_material_am'=>'Կերպասե',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Satin'
                ),
            10 =>
                array(
                    'id'=>11,
                    'shoes_material_am'=>'Բուրդ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Wool'
                ),
            11 =>
                array(
                    'id'=>12,
                    'shoes_material_am'=>'Թավիշ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Velvet'
                ),
            12 =>
                array(
                    'id'=>13,
                    'shoes_material_am'=>'Ցանց',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Mesh'
                ),
            13 =>
                array(
                    'id'=>14,
                    'shoes_material_am'=>'Բամբակ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Cotton'
                ),
            14 =>
                array(
                    'id'=>15,
                    'shoes_material_am'=>'Միկրոֆիբր',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Microfiber'
                ),
            15 =>
                array(
                    'id'=>16,
                    'shoes_material_am'=>'Վինիլային',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Vinyl'
                ),
            16 =>
                array(
                    'id'=>17,
                    'shoes_material_am'=>'Լատեքս',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Latex'
                ),
            17 =>
                array(
                    'id'=>18,
                    'shoes_material_am'=>'Պոլիեսթեր',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Polyester'
                ),
            18 =>
                array(
                    'id'=>19,
                    'shoes_material_am'=>'Վուշ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Linen'
                ),
            19 =>
                array(
                    'id'=>20,
                    'shoes_material_am'=>'Նեյլոն',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Nylon'
                ),
            20 =>
                array(
                    'id'=>21,
                    'shoes_material_am'=>'Դենիմ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>'Denim'
                ),
            21 =>
                array(
                    'id'=>22,
                    'shoes_material_am'=>'Այլ',
                    'shoes_material_ru'=>'',
                    'shoes_material_en'=>''
                ),


        ));
    }
}
