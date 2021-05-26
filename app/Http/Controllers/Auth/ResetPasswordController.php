<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    public function send_reset_mail(Request $request)
    {
        $user = Users::where('email', $request->email)->first();
        if ($user == null || $user->is_verified == 0) {

            return redirect()->back()->with(['error_reset' => 'Email not exists']);

        }
        $reset_token = bin2hex(random_bytes(64));
        MailController::ResetPasswordEmail($user->name, $user->email, $reset_token);
        DB::table('password_resets')->insert([
            'email' => $user->email,
            'token' => $reset_token,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back()->with('modal_type', ['send_password']);


    }

    public function change_password(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|min:8',
            'password_confirm' => 'required',
        ]);
        $password = $request->password;
        $password_conf = $request->password_confirm;
        if ($password != $password_conf)
        {

            return redirect()->back()->with('modal_type','confirm_no_match')->with('no_confirm','Passwords doesnt not match');

        }
        else{

            $email = $request->changing_email;
            $user = Users::where('email',$email)->first();
            if ($user != null)
            {
                $user->password = Hash::make($password);
                $user->save();
//                @dump($user->password);
                return redirect()->back()->with('modal_type','success_pass_change')->with('pass_change','Password changes successfuly');

            }
            else{

                return redirect()->back()->with('modal_type','no_reset_email');


            }

        }



//       dd($request->all());

    }
}
