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
            $basket_contents_count = Basket::basket_product_count($request->product_id, $product, $request->option_id);
            $basket_content = Basket::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)
                ->where('options_id', $request->option_id)->where('options_id', '!=', null)->first();
            $basket_content_without = Basket::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)
                ->where('options_id', null)->first();
            $added_product = Product::find($request->product_id);

            if ($basket_contents_count !== null && $basket_contents_count !== false) {
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
                    } else {
                        if ($basket_content_without != null) {
//                            dd($basket_content_without);
                            Basket::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)
                                ->where('options_id', null)->delete();
                        }
                    }

                }

            } else {

                return response()->json(['basket_error' => 'Please select currectly option in product']);

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
        $store_basket_all = Basket::where('user_id', Auth::user()->id)->where('store_id', $store_id)->get();
        $store_basket = Basket::where('user_id', Auth::user()->id)->where('store_id', $store_id)->paginate(2);
        $store_basket_count = Basket::where('user_id', Auth::user()->id)->where('store_id', $store_id)->count();
        $basket_order_cost = 0;
        foreach ($store_basket_all as $b) {

            if ($b->basket_product($b->product_id)->percent != null) {
                $basket_order_cost += $b->product_total_price($b->basket_product($b->product_id)->discounted_price());
            } else {
                $basket_order_cost += $b->product_total_price($b->basket_product($b->product_id)->price);
            }

        }
        return response()
            ->json([
                'view' => view('site-basket', compact('store_basket', 'basket_order_cost','store_id','store_basket_count'))->render(),
                'store_basket' => $store_basket,
                'basket_order_cost' => $basket_order_cost,
                'store_id' => $store_id,
                'store_basket_count'=>$store_basket_count,
            ]);

    }

    public function single_store_checkeds(Request $request)
    {
//        dd($request->all());
        $store_id = $request->store_id;
        $store_basket_checkeds = Basket::where('user_id', Auth::user()->id)->where('store_id', $store_id)->whereIn('id', $request->checked)->get();
        $basket_order_cost = 0;
        foreach ($store_basket_checkeds as $b) {
            if ($b->basket_product($b->product_id)->percent != null) {
                $basket_order_cost += $b->product_total_price($b->basket_product($b->product_id)->discounted_price());
            } else {
                $basket_order_cost += $b->product_total_price($b->basket_product($b->product_id)->price);
            }

        }
        return response()
            ->json([
                'view' => view('basket-order-info', compact('basket_order_cost','store_id'))->render(),
                'basket_order_cost' => $basket_order_cost,
                'store_id' => $store_id,
            ]);
//        dd($store_basket_checkeds);

    }

    public function edit_basket(Request $request)
    {
//        dd($request->all());
        $basket_product = Basket::where('id', $request->basket_id)->first();
        if ($basket_product != null) {
            $product = Product::where('id', $basket_product->product_id)->where('status', 1)->first();
            if ($product != null) {
                $in_baskets_count = Basket::basket_product_count($product->id, $product, $request->option_id);
                $available_count = Basket::basket_product_original_count($product, $request->option_id);

                if ($request->quantity > $available_count) {
                    return response()->json(['edit_basket_error' => 'The specified quantity is not available', 'quantity' => $basket_product->quantity]);
                } else {
                    $basket_product->quantity = $request->quantity;
                    if ($product->percent != null) {
                        $edited_total_price = $request->quantity * $product->discounted_price();
                    } else {
                        $edited_total_price = $request->quantity * $product->price;
                    }
                    $basket_product->save();
                    return response()->json(['success_edit' => 'Product is changed successfuly', 'total_price' => $edited_total_price]);
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
                $basket_count = Basket::user_basket_count();
                return response()->json(['success_delete' => 'Product deleted successfuly','basket_count'=>$basket_count]);
            } else {
                return response()->json(['error_delete' => 'Product is not found']);
            }


        } else {
            return response()->json(['error_delete' => 'Product is not found']);

        }


    }
}
