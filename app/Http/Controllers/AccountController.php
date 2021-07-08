<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Users;
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
        if($request->has('code_change')) {

            $changed_email = $request->get('email');
            $user = Users::find(Auth::user()->id);
            if ($request->get('code_change') == $user->verification_code)
            {

                $user->email = $changed_email;
                $user->save();
                return redirect()->back()->with('modal_type','change_email');

            }


        }
        $products = Product::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->paginate(2);
        // dd($products[0]->product_sizes);
        return view('account.account',compact('products'));

    }
}
