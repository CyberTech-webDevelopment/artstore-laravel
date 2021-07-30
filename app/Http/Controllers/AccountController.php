<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Users;
use App\Notifications\OrderNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $user = Users::find(Auth::user()->id);


        if($request->has('code_change')) {

            $changed_email = $request->get('email');

            if ($request->get('code_change') == $user->verification_code)
            {

                $user->email = $changed_email;
                $user->save();
                return redirect()->back()->with('modal_type_account','change_email');

            }


        }
        if($user->store == null){
            $products = Product::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(2);
            return view('account.account',compact('products'));

        }
        else
        {
            $users_store_id = $user->store->id;
            $products = Product::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(2);
            $stores_unread_orders_count = Order::where('store_id',$users_store_id)->where('read_at',0)->orderBy('created_at','desc')->count();
            return view('account.account',compact('products','stores_unread_orders_count'));

        }
//        $stores_unread_orders_count = Order::where('store_id',$users_store_id)->where('read_at',0)->orderBy('created_at','desc')->count();
        // dd($products[0]->product_sizes);
//        $notifications = auth()->user()->unreadNotifications;

    }
    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
