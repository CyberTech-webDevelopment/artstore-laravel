<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use App\Models\Sub_categories;
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
        foreach ($checked_sub_menus as $el) {
            $cur_sub_m = Sub_menu::find($el);
            $res = $cur_sub_m->sub_categories;
            foreach ($res as $el) {

                array_push($elems_array, $el);
            }

            $sub_categories[$cur_sub_m['sub_menu_name_' . app()->getLocale()]] = $elems_array;
            $elems_array = [];
        }
        return response()->json(['sub_cat' => $sub_categories,]);


    }

    public function add_categories_section(Request $request)
    {
        return response()
            ->json([
                'view' => view('account.categories-section')->render(),
            ]);


    }

    public function category_page(Request $request)
    {
        $products = [];
        $filtr_products = [];
        $current_sub_menues = [];
        if ($request->cat_type == 1) {
            $menu = Menu::find($request->cat_id);
            $page_name = $menu['menu_name_' . app()->getLocale()];
            $category_ids = $menu->sub_categories->pluck('id');
            $sub_categories = Sub_categories::whereIn('id', $category_ids)->get();
            foreach ($sub_categories as $el) {
                if (count($el->type_products) > 0) {
//                    dump($el->type_products);
                    foreach ($el->type_products as $item) {
                        array_push($products, $item);
                    }
                }
            }
        }
        if ($request->cat_type == 2) {

            $submenu = Sub_menu::find($request->cat_id);
            $parent_menu = Menu::find($submenu->menu_id);
            $current_sub_menues = $parent_menu->sub_menues;
//            @dump($current_sub_menues);
            $page_name = $submenu['sub_menu_name_' . app()->getLocale()];
            $category_ids = $submenu->sub_categories->pluck('id');
            $sub_categories = Sub_categories::whereIn('id', $category_ids)->get();
            foreach ($sub_categories as $el) {
                if (count($el->type_products) > 0) {
//                    dump($el->type_products);
                    foreach ($el->type_products as $item) {
                        array_push($products, $item);
                    }
                }
            }
        }
        if ($request->cat_type == 3) {
            $subcategory = Sub_categories::find($request->cat_id);
            $page_name = $subcategory['name_category_' . app()->getLocale()];
            $products = $subcategory->type_products;
        }
//        dd($products);
        if (count($products) > 0)
        {
           $filtr_products = Product::products_filtrs($products,$request->cat_type);
        }
//        dump($products);
//        dump($filtr_products);
        return view('current-category-page', compact('products','filtr_products','page_name','current_sub_menues'));
//        return redirect()->route('cur.cat.products');
    }

}
