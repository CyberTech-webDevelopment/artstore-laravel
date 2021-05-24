<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('code'))
        {
            $verification_code = $request->get('code');
//            $user = Users::where(['verification_code' => $verification_code])->first();
//            $u = new Users();
              $user = Users::OlderThanOneDay($verification_code)->first();
            if ($user != null) {
                $user->is_verified = 1;
                $user->save();

                return redirect()->route('index')->with('modal_type', ['success_email']);
//            return view('index')->with('modal_type', ['success_email']);
            }
            else
            {
                return redirect()->route('index')->with('modal_type', ['time_end']);
//                return view('index')->with('modal_type', ['success_email'], session()->flash('reg_error', 'Something Wrong'));

            }
        }
        return view('index');

    }
    public function index_login(Request $request)
    {



    }
}
