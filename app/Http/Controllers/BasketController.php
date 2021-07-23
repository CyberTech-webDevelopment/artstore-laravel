<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Basket;
use App\Models\Shop;

class BasketController extends Controller
{
    public function index()
    {
        $baskets_stores = Basket::user_basket_stores();
        return view('basket-in-shop', compact('baskets_stores'));
    }

    public function add_basket(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|numeric',
            'option_id' => 'numeric|nullable',
            'quantity' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            $errors = $validator->failed();
//            dump($errors);
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
        if ($product->product_store->user_id == Auth::user()->id) {
            return response()->json(['basket_error' => 'The product belongs to your store']);

        }
        if ($product != null) {
//            if ($request->size != null) {
//                $valid_sizes = $product->product_sizes->pluck('id')->toArray();
//                if (!in_array($request->size, $valid_sizes)) {
//                    return response()->json(['basket_error' => 'Invalid statements']);
//
//                }
//            }

            $basket_contents_count = Basket::basket_product_count($request->product_id, $product, $request->option_id);
            $basket_content = Basket::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)
                ->where('options_id', $request->option_id)->where('options_id','!=',null)->first();
            $basket_content_without = Basket::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)
                ->where('options_id', null)->first();
            $added_product = Product::find($request->product_id);
            if ($basket_contents_count != null) {
                $general_count = $basket_contents_count + $request->quantity;
                $added_option_in_basket_count = $added_product->total_count;
                if (count($added_product->product_options) > 0) {
                    $added_option_in_basket_count = Basket::get_added_option($request->option_id)->quantity;

                }

                if ($general_count > $added_option_in_basket_count) {
                    return response()->json(['basket_error' => 'The specified quantity is not available']);
                } else {

                    if ($basket_content != null) {
                        $basket_content->quantity = $general_count;
                        $basket_content->save();
                        $basket_count = Basket::where('user_id', Auth::user()->id)->count();
                        return response()->json(['basket' => 'Product quantity successfuly changed', 'basket_count' => $basket_count]);
                    }
                    else
                    {
                        if($basket_content_without != null)
                        {
                            dd($basket_content_without);
                            $basket_content_without->delete();
                        }
                    }

                }

            }
            DB::table('baskets')->insert([
                'product_id' => $request->product_id,
                'store_id' => $product->product_store->id,
                'user_id' => Auth::user()->id,
                'options_id' => $request->option_id,
                'quantity' => $request->quantity,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $basket_count = Basket::where('user_id', Auth::user()->id)->count();
            return response()->json(['basket' => 'Product successfuly added', 'basket_count' => $basket_count]);
        } else {
            return response()->json(['basket_error' => 'Invalid statements']);

        }
//        dd(Product::where('id', '=', $request->product_id)->exists());

    }

    public function single_store_products(Request $request)
    {
        $store_id = $request->store_id;
        $store_basket = Basket::where('user_id', Auth::user()->id)->where('store_id', $store_id)->paginate(2);
//        $store_basket->setPath('/singlestore');
        return response()
            ->json([
                'view' => view('site-basket', compact('store_basket'))->render(),
                'store_basket' => $store_basket,
            ]);

    }

    public function edit_basket(Request $request)
    {
        $basket_product = Basket::where('id', $request->basket_id)->first();

        if ($basket_product != null) {
            $product = Product::where('id', $basket_product->product_id)->where('status', 1)->first();
            if ($product != null) {
                $in_baskets_count = Basket::basket_product_count($product->id);
                $general_count = ($in_baskets_count - $basket_product->quantity) + $request->quantity;
                if ($general_count > $product->quantity) {
                    return response()->json(['edit_basket_error' => 'The specified quantity is not available', 'quantity' => $basket_product->quantity]);
                } else {
                    $basket_product->quantity = $request->quantity;
                    $basket_product->save();
                    return response()->json(['success_edit' => 'Product is changed successfuly']);
                }

            } else {
                return response()->json(['edit_basket_error' => 'Product is not found', 'quantity' => $basket_product->quantity]);
            }

        } else {

            return response()->json(['edit_basket_error' => 'Product is not found', 'quantity' => $basket_product->quantity]);
        }


    }

    public function delete_basket(Request $request)
    {
        $basket_product = Basket::where('id', $request->basket_id)->first();
        if ($basket_product != null) {
            $success_del = $basket_product->delete();
            if ($success_del) {

                return response()->json(['success_delete' => 'Product deleted successfuly']);
            } else {
                return response()->json(['error_delete' => 'Product is not found']);
            }


        } else {
            return response()->json(['error_delete' => 'Product is not found']);

        }


    }
}
