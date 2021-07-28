<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Models\Users;
use App\Events\OrderEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('code')) {

            $verification_code = $request->get('code');
            $user = Users::OlderThanOneDay($verification_code)->first();

            if ($user != null) {
                $user->is_verified = 1;
                $user->save();

                return redirect()->route('index', App::getLocale())->with('modal_type', ['success_email']);
            } else {
                return redirect()->route('index', App::getLocale())->with('modal_type', ['time_end']);

            }
        }
        if ($request->has('code_reset')) {

            $reset_token = $request->get('code_reset');
            $tokenData = DB::table('password_resets')
                ->where('token', $reset_token)->where('created_at', '>', Carbon::yesterday())->first();


            if ($tokenData != null) {
                DB::table('password_resets')->where('token', $tokenData->token)->delete();

                return redirect()->route('index', App::getLocale())->with('modal_type', ['success_reset'])->with('email', $request->get('email'));

            } else {

                return redirect()->route('index', App::getLocale())->with('modal_type', ['time_end_reset']);

            }
        }

        $new_arrivals = Product::where(
            'created_at', '>=', Carbon::now()->subDays(30)->toDateTimeString()
        )->where('status', 1)->orderBy('created_at', 'desc')->take(4)->get();
        $stores = Shop::all();
        if (count($new_arrivals) == 0) {

            $new_arrivals = Product::where('status', 1)->orderBy('created_at', 'desc')->take(4)->get();
        }
//        event(new Ordered($order_notify,$sending_user->id));
        return view('index', compact('new_arrivals', 'stores'));

    }


//    public function check_verify_link(Request $request)
//    {
//        $verification_code = $request->get('code');
//        $user = Users::OlderThanOneDay($verification_code)->first();
//        if ($user != null) {
//            $user->is_verified = 1;
//            $user->save();
//
//            return redirect()->route('index')->with('modal_type', ['success_email']);
//        } else {
//            return redirect()->route('index')->with('modal_type', ['time_end']);
//
//        }
//
//    }
//
//    public function check_reset_token(Request $request)
//    {
//        $reset_token = $request->get('code_reset');
//        $tokenData = DB::table('password_resets')
//            ->where('token', $reset_token)->where('created_at', '>', Carbon::yesterday())->first();
//
//        if ($tokenData != null) {
//
//            return redirect()->route('index')->with('modal_type', ['success_reset']);
//        } else {
//
//            return redirect()->route('index')->with('modal_type', ['time_end_reset']);
//
//        }
//
//    }

}
