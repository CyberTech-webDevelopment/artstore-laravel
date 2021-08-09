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
//        dd($checked_sub_menus);

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

    public function in_cat_type($category_ids)
    {
        $products = Product::where('status', 1);
        $products->when($category_ids, function ($q) use ($category_ids) {
            $q->whereHas('product_type', function ($q) use ($category_ids) {
                $q->whereIn('products_sub_categories.type_id', $category_ids);
            });
        });
        $products = $products->paginate(1);
        return $products;
    }

    public function in_cat_type_all($category_ids)
    {
        $products = Product::where('status', 1);
        $products->when($category_ids, function ($q) use ($category_ids) {
            $q->whereHas('product_type', function ($q) use ($category_ids) {
                $q->whereIn('products_sub_categories.type_id', $category_ids);
            });
        });
        $products = $products->get();
        return $products;
    }

    public function category_page(Request $request, $id)
    {
        $products = [];
        $filtr_products = [];
        $current_sub_menues = [];
        $current_sub_cats = [];
        if (request()->ajax()) {
            $filtr_options = $request->filtr_options[0];

            if ($request->filtr_options[0]['cat_type'] == 1) {
                $menu = Menu::find($request->id);
                $current_sub_menues = $menu->sub_menues;
                $page_name = $menu['menu_name_' . app()->getLocale()];
                $category_ids = $menu->sub_categories->pluck('id');
                $products_all = $this->in_cat_type_all($category_ids);
                $products = $this->in_cat_type($category_ids);
            }
            if ($request->filtr_options[0]['cat_type'] == 2) {
                $submenu = Sub_menu::find($request->filtr_options[0]['cat_id']);
                $current_sub_cats = $submenu->sub_categories;
                $page_name = $submenu['sub_menu_name_' . app()->getLocale()];
                $category_ids = $submenu->sub_categories->pluck('id');
                $products_all = $this->in_cat_type_all($category_ids);
                $products = $this->in_cat_type($category_ids);
            }
            if ($request->filtr_options[0]['cat_type'] == 3) {
                $subcategory = Sub_categories::find($request->filtr_options[0]['cat_id']);
                $page_name = $subcategory['name_category_' . app()->getLocale()];
                $products_all = $subcategory->type_products()->where('status', 1)->get();
                $products = $subcategory->type_products()->where('status', 1)->paginate(1);
            }
            if (count($products) > 0) {
//                @dump($products_all);
                $filtr_products = Product::products_filtrs($products_all, $request->filtr_options[0]['cat_type']);
                $cat_id = $request->filtr_options[0]['cat_id'];
            }
            $products = Product::filtring_products($request->filtr_options[0]);
            return response()
                ->json([
                    'view' => view('category-page-content', compact('products', 'filtr_options', 'filtr_products', 'page_name', 'cat_id', 'current_sub_cats', 'current_sub_menues'))->render(),
                    'products' => $products,
                ]);
        }
        if ($request->cat_type == 1) {
            $menu = Menu::find($request->id);
            $current_sub_menues = $menu->sub_menues;
            $page_name = $menu['menu_name_' . app()->getLocale()];
            $category_ids = $menu->sub_categories->pluck('id');
            $products_all = $this->in_cat_type_all($category_ids);
            $products = $this->in_cat_type($category_ids);
        }
        if ($request->cat_type == 2) {
            $submenu = Sub_menu::find($request->cat_id);
            $current_sub_cats = $submenu->sub_categories;
            $page_name = $submenu['sub_menu_name_' . app()->getLocale()];
            $category_ids = $submenu->sub_categories->pluck('id');
            $products_all = $this->in_cat_type_all($category_ids);
            $products = $this->in_cat_type($category_ids);
        }
        if ($request->cat_type == 3) {
            $subcategory = Sub_categories::find($request->cat_id);
            $page_name = $subcategory['name_category_' . app()->getLocale()];
            $products_all = $subcategory->type_products()->where('status', 1)->get();
            $products = $subcategory->type_products()->where('status', 1)->paginate(1);
        }
        if (count($products) > 0) {

            $filtr_products = Product::products_filtrs($products_all, $request->cat_type);
            $cat_id = $request->cat_id;
            $filtr_options_no_ajax = [
             'percent' => isset($request->percent) ? $request->percent : "undefined",
             'cat_type' => isset($request->cat_type) ? $request->cat_type : "undefined",
             'cat_id' => isset($request->cat_id) ? $request->cat_id : "undefined",
             'sub_menu' => isset($request->sub_menu) ? $request->sub_menu : "0",
             'sub_cat' => isset($request->sub_cat) ? $request->sub_cat : "0",
             'color' => isset($request->color) ? $request->sub_cat : "undefined",
             'size' => isset($request->size) ? $request->size : "undefined",
             'material' => isset($request->material) ? $request->material : "undefined",
             'gender' => isset($request->gender) ? $request->gender : "undefined",
             'material_type' => isset($request->material_type) ? $request->material_type : "undefined",
             'start_cost' => isset($request->start_cost) ? $request->start_cost : "undefined",
             'end_cost' => isset($request->end_cost) ? $request->end_cost : "undefined",
             'size_type' => isset($request->size_type) ? $request->size_type : "undefined",
            ];
            $products = Product::filtring_products($filtr_options_no_ajax);
            return view('current-category-page', compact('products', 'filtr_products', 'page_name', 'cat_id', 'current_sub_cats', 'current_sub_menues'));
        } else {
//            dd($request->all());
            return view('current-category-page', compact('products', 'filtr_products', 'current_sub_cats', 'current_sub_menues'));

        }


    }

}
