<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sub_categories;
use App\Models\Sub_menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    public function add_product(Request $request)
    {
// dd($request->all());
        $validator = Validator::make($request->all(), [
            'name_en' => 'required|max:255',
            'name_ru' => 'required|max:255',
            'name_am' => 'required|max:255',
            'desc_en' => 'required|min:25|max:255',
            'desc_ru' => 'required|min:25|max:255',
            'desc_am' => 'required|min:25|max:255',
            'detail_en' => 'required|min:6|max:255',
            'detail_ru' => 'required|min:6|max:255',
            'detail_am' => 'required|min:6|max:255',
            'type' => 'required',
            'count' => 'required|numeric',
            'price' => 'required|numeric',
            'percent' => 'nullable|numeric',
            'gender' => 'nullable|numeric',
            // 'size' => 'required',
            // 'color' => 'required',
            // 'material' => 'required',
            'files' => 'required',

        ]);
        if ($validator->fails()) {
            $errors = $validator->failed();
//            dump($errors);
            $fields_array = [];
            foreach ($errors as $err => $value) {
                foreach ($value as $key => $v) {
                    if ($key == 'Required') {
                        return response()->json(['product_error' => 'Please fill all required fields']);
                    }
                    if ($key == 'Numeric') {

                        $message_error = "Invalid value in the numeric field (s)";
                        return response()->json(['product_error' => $message_error]);

                    }
                    if ($key == 'Min') {

                        array_push($fields_array, $err);
                        $message_error = "field length " . $key;
                        foreach ($v as $el) {
                            $message_error = $message_error . ":" . $el;

                        }

                    }
                    if ($key == 'Max') {

                        array_push($fields_array, $err);
                        $message_error = "field length " . $key;
                        foreach ($v as $el) {
                            $message_error = $message_error . ":" . $el;

                        }

                    }
                }

            }
            return response()->json(['product_error' => $message_error, 'field' => $fields_array]);

        }
        $sizes = [];
        $materials = [];
        $colors = [];
        $product = new Product();
        if (isset($request->color)) {
            foreach ($request->color as $color) {
                array_push($colors, $color);
            }
        }
        $path = app_path() . "/Models";
        if (isset($request->size)) {
            $size_length = count($request->size);


            if ($size_length > 1) {
                return response()->json(['size_error' => 'Specify size(s) belonging to only one category']);

            } else {
                foreach ($request->size as $key => $value) {
                    $size_table = strtolower($key);
                    $find_model_size = $this->getModels($path, $key);
                    if (!$find_model_size) {
                        return response()->json(['model_found' => 'Model not found']);
                    }
                    foreach ($value as $el) {
                        array_push($sizes, $el);

                    }

                }

            }
            $product->size_type = $size_table;
        }
        if (isset($request->material)) {
            $material_length = count($request->material);
            if ($material_length > 1) {

                return response()->json(['material_error' => 'Specify material(s) belonging to only one category']);
            } else {

                foreach ($request->material as $key => $value) {
                    $material_table = strtolower($key);
                    $find_model_material = $this->getModels($path, $key);
                    if (!$find_model_material) {
                        return response()->json(['model_found' => 'Model not found']);
                    }
                    foreach ($value as $el) {

                        array_push($materials, $el);

                    }

                }

            }
            $product->material_type = $material_table;
        }

        $product->name_am = $request->name_am;
        $product->name_ru = $request->name_ru;
        $product->name_en = $request->name_en;
        $product->desc_am = $request->desc_am;
        $product->desc_ru = $request->desc_ru;
        $product->desc_en = $request->desc_en;
        $product->detail_am = $request->detail_am;
        $product->detail_ru = $request->detail_ru;
        $product->detail_en = $request->detail_en;
        $product->sub_cat = $request->type;
        $product->quantity = $request->count;
        $product->price = $request->price;
        $product->gender_id = $request->gender;
        $product->gift = $request->gift;
        $product->percent = $request->percent;
        $product->custom_material = $request->custom_material;
        $product->store_id = $request->store_id;
        $product->user_id = Auth::user()->id;
        $product->save();

        if (!empty($sizes)) {
            foreach ($sizes as $s) {

                DB::table('products_' . $size_table)->insert([
                    'product_id' => $product->id,
                    'size_id' => $s,

                ]);

            }

        }

        if (!empty($materials)) {
            foreach ($materials as $m) {

                DB::table('products_' . $material_table)->insert([
                    'product_id' => $product->id,
                    'materials_id' => $m,

                ]);

            }
        }
        if (!empty($colors)) {
            foreach ($colors as $c) {

                DB::table('products_colors')->insert([
                    'product_id' => $product->id,
                    'color_id' => $c,

                ]);

            }
        }
//        @dd($product->id);

        $product_images = $request->input('files');

        foreach ($product_images as $key => $img) {
            // dump($key);
            $img = str_replace('data:image/png;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $imageName = uniqid() . '.' . 'png';
            \File::put(public_path() . '/storage/product/' . $imageName, base64_decode($img));
            if ($key == 0) {
                DB::table('products_images')->insert([
                    'product_id' => $product->id,
                    'image' => $imageName,
                    'main' => 1,
                ]);

            } else {
                DB::table('products_images')->insert([
                    'product_id' => $product->id,
                    'image' => $imageName,
                    'main' => 0,
                ]);

            }


        }

        return response()->json(['ok']);
    }

    function getModels($path, $condition)
    {
        $is_contain = false;
        $results = scandir($path);
        $results = array_slice($results, 2);
        foreach ($results as $model_name) {
            $model_name = substr($model_name, 0, -4);
            if ($model_name == $condition) {
                $is_contain = true;
                break;
            }

        }
        return ($is_contain);
    }
    function startsWith($haystack, $needle) {
        return substr_compare($haystack, $needle, 0, strlen($needle)) === 0;
    }

// product short edit
    public function edit_short(Request $request)
    {

        //   dd($request->all());
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric',
            'status' => 'required|numeric',
            'price' => 'required|numeric',
            'percent' => 'nullable|numeric',

        ]);

        if ($validator->fails()) {
            $errors = $validator->failed();
            foreach ($errors as $err => $value) {
                foreach ($value as $key => $v) {
                    if ($key == 'Required') {
                        return response()->json(['product_error' => 'Please fill all required fields']);
                    }
                    if ($key == 'Numeric') {

                        $message_error = "Invalid value in the numeric field (s)";
                        return response()->json(['product_error' => $message_error]);

                    }

                }
            }
        }
        if (isset($request->product_id)) {
            $product = Product::find($request->product_id);
            $product->quantity = $request->input('quantity');
            $product->status = $request->status;
            $product->price = $request->price;
            $product->percent = $request->percent;
            $suc_save = $product->save();

        }
        if ($suc_save) {

            return response()->json('ok');

        }


    }

//   product more edit

    public function edit_more(Request $request)
    {
    //    dd($request->all());
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        $product_images = $product->product_images();

        return response()
            ->json([
                'view' => view('account.edit-products-modal', compact('product'))->render(),
                'product'=>$product,
                'product_img'=>$product_images,
            ]);

    }
    public function edit_morepost(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'name_en' => 'required|max:255',
            'name_ru' => 'required|max:255',
            'name_am' => 'required|max:255',
            'desc_en' => 'required|min:25|max:255',
            'desc_ru' => 'required|min:25|max:255',
            'desc_am' => 'required|min:25|max:255',
            'detail_en' => 'required|min:6|max:255',
            'detail_ru' => 'required|min:6|max:255',
            'detail_am' => 'required|min:6|max:255',
            'type' => 'required',
            'count' => 'required|numeric',
            'price' => 'required|numeric',
            'percent' => 'nullable|numeric',
            'gender' => 'required|numeric',
            // 'size' => 'required',
            // 'color' => 'required',
            // 'material' => 'required',
            'files_edit_capital' => 'required',

        ]);
        if ($validator->fails()) {
            $errors = $validator->failed();

            $fields_array = [];
            foreach ($errors as $err => $value) {
                // dump($err);
                foreach ($value as $key => $v) {
                    if ($key == 'Required') {
                        if($err == 'files_edit_capital')
                        {

                            return response()->json(['product_error' => 'Please set capital image']);
                        }
                        else
                        {
                            return response()->json(['product_error' => 'Please fill all required fields']);
                        }

                    }
                    if ($key == 'Numeric') {

                        $message_error = "Invalid value in the numeric field (s)";
                        return response()->json(['product_error' => $message_error]);

                    }
                    if ($key == 'Min') {

                        array_push($fields_array, $err);
                        $message_error = "field length " . $key;
                        foreach ($v as $el) {
                            $message_error = $message_error . ":" . $el;

                        }

                    }
                }

            }
            return response()->json(['product_error' => $message_error, 'field' => $fields_array]);

        }

        $product_id = $request->product_id;
        $product = Product::find($product_id);
        $sizes = [];
        $materials = [];
        $colors = [];

        if (isset($request->color)) {
            foreach ($request->color as $color) {
                array_push($colors, $color);
            }
        }
        $path = app_path() . "/Models";
        if (isset($request->size)) {

            $db_size_type = $product->size_type;
            // dd($db_size_type);
            $size_length = count($request->size);


            if ($size_length > 1) {
                return response()->json(['size_error' => 'Specify size(s) belonging to only one category']);

            } else {
                foreach ($request->size as $key => $value) {
                    $size_table = strtolower($key);
                    $find_model_size = $this->getModels($path, $key);
                    if (!$find_model_size) {
                        return response()->json(['model_found' => 'Model not found']);
                    }
                    foreach ($value as $el) {
                        array_push($sizes, $el);

                    }

                }

            }
            $product->size_type = $size_table;
        }

        if (isset($request->material)) {

            $db_material_type = $product->material_type;
            $material_length = count($request->material);
            if ($material_length > 1) {

                return response()->json(['material_error' => 'Specify material(s) belonging to only one category']);
            } else {

                foreach ($request->material as $key => $value) {
                    $material_table = strtolower($key);
                    $find_model_material = $this->getModels($path, $key);
                    if (!$find_model_material) {
                        return response()->json(['model_found' => 'Model not found']);
                    }
                    foreach ($value as $el) {

                        array_push($materials, $el);

                    }

                }

            }
            $product->material_type = $material_table;
        }

        $product->name_am = $request->name_am;
        $product->name_ru = $request->name_ru;
        $product->name_en = $request->name_en;
        $product->desc_am = $request->desc_am;
        $product->desc_ru = $request->desc_ru;
        $product->desc_en = $request->desc_en;
        $product->detail_am = $request->detail_am;
        $product->detail_ru = $request->detail_ru;
        $product->detail_en = $request->detail_en;
        $product->sub_cat = $request->type;
        $product->quantity = $request->count;
        $product->price = $request->price;
        $product->gender_id = $request->gender;
        $product->gift = $request->gift;
        $product->percent = $request->percent;
        $product->custom_material = $request->custom_material;
        $product->store_id = $request->store_id;
        $product->user_id = Auth::user()->id;
        $product->save();

        if (!empty($sizes)) {
            DB::table('products_' . $db_size_type)->where('product_id', $product_id)->delete();

            foreach ($sizes as $s) {

                DB::table('products_' . $size_table)->insert([
                    'product_id' => $product->id,
                    'size_id' => $s,

                ]);

            }

        }

        if (!empty($materials)) {
            DB::table('products_' . $db_material_type)->where('product_id', $product_id)->delete();
            foreach ($materials as $m) {

                DB::table('products_' . $material_table)->insert([
                    'product_id' => $product->id,
                    'materials_id' => $m,

                ]);

            }
        }
        if (!empty($colors)) {
            DB::table('products_colors')->where('product_id', $product_id)->delete();
            foreach ($colors as $c) {

                DB::table('products_colors')->insert([
                    'product_id' => $product->id,
                    'color_id' => $c,

                ]);

            }
        }
//        @dd($product->id);
        $db_images = $product->product_images();
        $db_capital_image = $product->product_head_images();
        $product_images = $request->input('files_edit_pr');
        $product_capital_image = $request->input('files_edit_capital')[0];
        DB::table('products_images')->where('product_id', $product_id)->delete();

            if($db_capital_image != $product_capital_image)
            {
                // dump($db_capital_image);
                // dump($product_capital_image);
                unlink(public_path() . '/storage/product/' . $db_capital_image);
            }


    //    dd($product_images);
       if($product_images != null){
        // dump('ssssssss')
        foreach($db_images as $element){

            foreach ($product_images as $key => $img) {
                if($element->image != $img && $element->image != $product_capital_image && $element->main != 1)
                {
                    // dump($element->image);
                    // dump($img);
                    // dump($product_capital_image);

                    unlink(public_path() . '/storage/product/' . $element->image);
                    break;
                }

            }

        }


       }

        // dump($db_images);
        // dump($db_capital_image);
        // dd($request->all());



        if ($this->startsWith($product_capital_image,"data:")){
            // dd("is base 64 ");
            $img_capital = str_replace('data:image/png;base64,', '', $product_capital_image);
            $img_capital = str_replace(' ', '+', $img_capital);
            $imageName_capital = uniqid() . '.' . 'png';
            \File::put(public_path() . '/storage/product/' . $imageName_capital, base64_decode($img_capital));
            DB::table('products_images')->insert([
                'product_id' => $product->id,
                'image' => $imageName_capital,
                'main' => 1,
            ]);
        }
        else {
            // dd("is not a base 64 ");
            // $imageName_capital = uniqid() . '.' . 'png';
            // \File::put(public_path() . '/storage/product/' . $imageName_capital, $product_capital_image);

            DB::table('products_images')->insert([
                'product_id' => $product->id,
                'image' => $product_capital_image,
                'main' => 1,
            ]);
        }

        if($product_images != null)
        {

            foreach ($product_images as $key => $img) {
                // dump($img);
                if ($this->startsWith($img,"data:")){
                  $img = str_replace('data:image/png;base64,', '', $img);
                  $img = str_replace(' ', '+', $img);
                  $imageName = uniqid() . '.' . 'png';
                  \File::put(public_path() . '/storage/product/' . $imageName, base64_decode($img));

                     DB::table('products_images')->insert([
                         'product_id' => $product->id,
                         'image' => $imageName,
                         'main' => 0,
                     ]);


                }
                else
                {
                    DB::table('products_images')->insert([
                        'product_id' => $product->id,
                        'image' => $img ,
                        'main' => 0,
                    ]);

                }

            }
        }


        return response()->json(['ok']);


    }

    // ----------product page----------------------
    public function product()
    {
        return view('product.product-page');
    }
}
