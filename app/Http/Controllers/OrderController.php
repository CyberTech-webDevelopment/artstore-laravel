<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use App\Models\Product_Options;
use App\Models\Shop;
use App\Models\Order;
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
        $store = Shop::find($request->store_id);
        if ($store != null) {
            $sending_user = $store->shops_author;
            if ($request->has('checkeds')) {

                $ordered = Basket::whereIn('id', $request->checkeds)->where('user_id', Auth::user()->id)
                    ->where('store_id', $request->store_id)->get();
            } else {
                $ordered = Basket::where('user_id', Auth::user()->id)->where('store_id', $request->store_id)->get();
            }
            $order_total_count = 0;
            foreach ($ordered as $order) {
                $in_order_count = $order->quantity;
                $product = $order->basket_product($order->product_id);
                if ($order->options_id != null) {
                    $in_available_quantity = Basket::basket_product_original_count($product, $order->options_id);
                    $product_total_change = Product_Options::find($order->options_id);
                    $product_total_change->quantity = $in_available_quantity - $in_order_count;
                    $product->total_count = $product->total_count - $in_order_count;
                    $product_total_change->save();
                    $product->save();

                } else {
                    $in_available_quantity = Basket::basket_product_original_count($product, $order->options_id);
                    $product->total_count = $in_available_quantity - $in_order_count;
                    $product->save();


                }
                $order_total_count += $in_order_count;
//                dd($order->basket_product($order->product_id));

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
            $order_notify = [

                'quantity' => $order_total_count,
                'user_id' => $sending_user->id,

            ];
//            $sending_user->notify(new OrderNotification($order_notify,$sending_user->id));
//            dd($sending_user);
            event(new Ordered($order_notify));

            return response()->json(['success_order' => 'Product(s) is ordered successfully']);

        } else {
            return response()->json(['shop_not_found' => 'Shop not found']);
        }

    }

    public function store_orders(Request $request)
    {
        DB::table('orders')->where('read_at', 0)
            ->where('store_id', $request->store_id)
            ->lazyById()->each(function ($order) {
                DB::table('orders')
                    ->where('id', $order->id)
                    ->update(['read_at' => 1]);
            });
        $store_orders = Order::where('store_id', $request->store_id)->orderBy('created_at', 'desc')->paginate(3);
        return response()
            ->json([
                'view' => view('account.settings.shop-order-history', compact('store_orders'))->render(),
                'store_orders' => $store_orders,
            ]);
    }
    public function user_orders(Request $request)
    {
        $user_orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(3);
        return response()
            ->json([
                'view' => view('account.settings.user-order-history', compact('user_orders'))->render(),
                'user_orders' => $user_orders,
            ]);
    }

    public function delete_order(Request $request)
    {
//        dd($request->all());
        $del_order = Order::whereIn('id', $request->orders_id)->delete();
        if ($del_order)
        {
            return response()->json(['res' => $del_order]);
        }
        else
        {
            return response()->json(['res' => 0]);
        }

    }
}
