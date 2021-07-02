<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
    public function index()
    {
        $products = Product::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(6);
        // dd($products[0]->product_sizes);
        return view('account.account',compact('products'));

    }
}
