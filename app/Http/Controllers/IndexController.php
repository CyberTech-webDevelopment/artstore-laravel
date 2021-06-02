<?php

namespace App\Http\Controllers;

use App\Models\Users;
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
//            ->where('created_at', '>', Carbon::yesterday())->first();

            if ($tokenData != null) {
                DB::table('password_resets')->where('token', $tokenData->token)->delete();

                return redirect()->route('index', App::getLocale())->with('modal_type', ['success_reset'])->with('email', $request->get('email'));

            } else {

                return redirect()->route('index', App::getLocale())->with('modal_type', ['time_end_reset']);

            }
        }
        return view('index');

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
