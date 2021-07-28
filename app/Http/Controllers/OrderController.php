<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product_Options;
use App\Models\Shop;
use App\Notifications\OrderNotification;
use App\Events\Ordered;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    use Notifiable;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add_order(Request $request)
    {
//        dd($request->all());
        $store = Shop::find($request->store_id);
        if ($store != null) {
            $sending_user = $store->shops_author;
//            dd($sending_user);
            if ($request->has('checkeds')) {

                $ordered = Basket::whereIn('id', $request->checkeds)->where('user_id', Auth::user()->id)
                    ->where('store_id', $request->store_id)->get();
            } else {
                $ordered = Basket::where('user_id', Auth::user()->id)->where('store_id', $request->store_id)->get();
            }
            foreach ($ordered as $order) {
                $in_order_count = $order->quantity;
                $product = $order->basket_product($order->product_id);
                if ($order->options_id != null) {
                    $in_available_quantity = Basket::basket_product_original_count($product, $order->options_id);
                    $product_total_change = Product_Options::find($order->options_id);
                    $product_total_change->quantity = $in_available_quantity - $in_order_count;
                    $product_total_change->save();

                } else {
                    $in_available_quantity = Basket::basket_product_original_count($product, $order->options_id);
                    $product->total_count = $in_available_quantity - $in_order_count;
                    $product->save();


                }
//                dd($order->basket_product($order->product_id));
                $order_notify = [
                    'name'=> $order->basket_product($order->product_id)['name_am'],
                    'quantity'=> $order->quantity,

                ];
                Basket::destroy($order->id);
                DB::table('orders')->insert([
                    'product_id' => $order->product_id,
                    'store_id' => $request->store_id,
                    'user_id' => Auth::user()->id,
                    'options_id' => $order->options_id,
                    'quantity' => $order->quantity,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
//dd($order_notify);
//            $sending_user->notify(new OrderNotification($order_notify,$sending_user->id));
//            dd($sending_user);
            event(new Ordered($order_notify,$sending_user));

            return response()->json(['success_order'=>'Product(s) is ordered successfully']);

        } else {
            return response()->json(['shop_not_found' => 'Shop not found']);
        }

    }
}