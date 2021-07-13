<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class BasketController extends Controller
{
    public function index()
    {

        return view('site-basket');
    }

    public function add_basket(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [

            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'size' => 'nullable|numeric',
            'material' => 'nullable|numeric',
            'color' => 'nullable|numeric',


        ]);

        if ($validator->fails()) {
            $errors = $validator->failed();
//            dump($errors);
            $fields_array = [];
            foreach ($errors as $err => $value) {
                foreach ($value as $key => $v) {
                    if ($key == 'Required') {
                        return response()->json(['basket_error' => 'Please fill all required fields']);
                    }
                    if ($key == 'Numeric') {

                        $message_error = "Invalid value in the numeric field (s)";
                        return response()->json(['basket_error' => $message_error]);

                    }

                }

            }

        }
        $product = Product::find($request->product_id);

        if ($product != null)
        {
            if ($request->size != null )
            {
                $valid_sizes = $product->product_sizes->pluck('id')->toArray();
                if (!in_array( $request->size ,$valid_sizes ))
                {
                    return response()->json(['basket_error' => 'Invalid statements']);

                }
            }
            if ($request->material != null )
            {
                $valid_materials = $product->product_materials->pluck('id')->toArray();
                if (!in_array( $request->material ,$valid_materials))
                {
                    return response()->json(['basket_error' => 'Invalid statements']);

                }
            }
            if ($request->color != null )
            {
                $valid_colors = $product->product_colors->pluck('id')->toArray();
                if (!in_array( $request->color ,$valid_colors))
                {
                    return response()->json(['basket_error' => 'Invalid statements']);

                }
            }

            DB::table('baskets')->insert([
                'product_id' => $request->product_id,
                'store_id' => $product->product_store->id,
                'user_id' => Auth::user()->id,
                'quantity' => $request->quantity,
                'size' => $request->size,
                'material' => $request->material,
                'color' => $request->color,

            ]);

            return response()->json(['ok']);
        }
        else
        {
            return response()->json(['basket_error' => 'Invalid statements']);

        }
//        dd(Product::where('id', '=', $request->product_id)->exists());

    }
}
