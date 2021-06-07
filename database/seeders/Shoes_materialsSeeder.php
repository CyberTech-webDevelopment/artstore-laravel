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
                    'material_am'=>'Կաշի',
                    'material_ru'=>'',
                    'material_en'=>'Leather'
                ),
            1 =>
                array(
                    'id'=>2,
                    'material_am'=>'Լաքապատ կաշի',
                    'material_ru'=>'',
                    'material_en'=>'Patent Leather'
                ),
            2 =>
                array(
                    'id'=>3,
                    'material_am'=>'Արհեստական կաշվե',
                    'material_ru'=>'',
                    'material_en'=>'Faux Leather'
                ),
            3 =>
                array(
                    'id'=>4,
                    'material_am'=>'Ձեռագործ',
                    'material_ru'=>'',
                    'material_en'=>'Manmade'
                ),
            4 =>
                array(
                    'id'=>5,
                    'material_am'=>'Գործվածք',
                    'material_ru'=>'',
                    'material_en'=>'Fabric'
                ),
            5 =>
                array(
                    'id'=>6,
                    'material_am'=>'Թավշակաշի',
                    'material_ru'=>'',
                    'material_en'=>'Suede'
                ),
            6 =>
                array(
                    'id'=>7,
                    'material_am'=>'Քաթանե',
                    'material_ru'=>'',
                    'material_en'=>'Canvas'
                ),
            7 =>
                array(
                    'id'=>8,
                    'material_am'=>'Նուբուկ',
                    'material_ru'=>'',
                    'material_en'=>'Nubuck'
                ),
            8 =>
                array(
                    'id'=>9,
                    'material_am'=>'Ռետինե',
                    'material_ru'=>'',
                    'material_en'=>'Rubber'
                ),
            9 =>
                array(
                    'id'=>10,
                    'material_am'=>'Կերպասե',
                    'material_ru'=>'',
                    'material_en'=>'Satin'
                ),
            10 =>
                array(
                    'id'=>11,
                    'material_am'=>'Բուրդ',
                    'material_ru'=>'',
                    'material_en'=>'Wool'
                ),
            11 =>
                array(
                    'id'=>12,
                    'material_am'=>'Թավիշ',
                    'material_ru'=>'',
                    'material_en'=>'Velvet'
                ),
            12 =>
                array(
                    'id'=>13,
                    'material_am'=>'Ցանց',
                    'material_ru'=>'',
                    'material_en'=>'Mesh'
                ),
            13 =>
                array(
                    'id'=>14,
                    'material_am'=>'Բամբակ',
                    'material_ru'=>'',
                    'material_en'=>'Cotton'
                ),
            14 =>
                array(
                    'id'=>15,
                    'material_am'=>'Միկրոֆիբր',
                    'material_ru'=>'',
                    'material_en'=>'Microfiber'
                ),
            15 =>
                array(
                    'id'=>16,
                    'material_am'=>'Վինիլային',
                    'material_ru'=>'',
                    'material_en'=>'Vinyl'
                ),
            16 =>
                array(
                    'id'=>17,
                    'material_am'=>'Լատեքս',
                    'material_ru'=>'',
                    'material_en'=>'Latex'
                ),
            17 =>
                array(
                    'id'=>18,
                    'material_am'=>'Պոլիեսթեր',
                    'material_ru'=>'',
                    'material_en'=>'Polyester'
                ),
            18 =>
                array(
                    'id'=>19,
                    'material_am'=>'Վուշ',
                    'material_ru'=>'',
                    'material_en'=>'Linen'
                ),
            19 =>
                array(
                    'id'=>20,
                    'material_am'=>'Նեյլոն',
                    'material_ru'=>'',
                    'material_en'=>'Nylon'
                ),
            20 =>
                array(
                    'id'=>21,
                    'material_am'=>'Դենիմ',
                    'material_ru'=>'',
                    'material_en'=>'Denim'
                ),
            21 =>
                array(
                    'id'=>22,
                    'material_am'=>'Այլ',
                    'material_ru'=>'',
                    'material_en'=>''
                ),


        ));
    }
}
