<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Sub_menu;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function menu_in_sub_menu(Request $request)
    {
        $menu_id = $request->post('menu_id');
        $cur_menu = Menu::find($menu_id);
        $sub_menus = $cur_menu->sub_menues;

        return response()->json(['sub_menu' => $sub_menus]);

    }

    public function sub_menu_in_sub_cat(Request $request)
    {
        $sub_categories = [];
        $elems_array = [];
        $checked_sub_menus = $request->post('sub_menu_ids');
        foreach ($checked_sub_menus as $el){
            $cur_sub_m = Sub_menu::find($el);
            $res = $cur_sub_m->sub_categories;
            foreach ($res as $el){

                array_push($elems_array,$el);
            }

           $sub_categories[$cur_sub_m['sub_menu_name_'.app()->getLocale()]] = $elems_array;
           $elems_array = [];
        }
        return response()->json(['sub_cat' => $sub_categories,]);
//        dd($request->all());


    }
}
