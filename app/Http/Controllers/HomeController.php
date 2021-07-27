<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Models\Users;
use App\Events\OrderEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $new_arrivals = Product::where(
            'created_at', '>=', Carbon::now()->subDays(30)->toDateTimeString()
        )->where('status',1)->orderBy('created_at', 'desc')->take(4)->get();
        $stores = Shop::all();
        if(count($new_arrivals) == 0)
        {

            $new_arrivals = Product::where('status',1)->orderBy('created_at', 'desc')->take(4)->get();
        }

//        event(new OrderEvent('alooo notify'));
        return view('index',compact('new_arrivals','stores'));

    }
}
