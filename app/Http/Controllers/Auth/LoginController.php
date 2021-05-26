<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed'),trans('auth.password')];
//        $errors_pass = ['password' => trans('auth.password')];
        $user = Users::where('email', $request->email)->first();
        // Check if user was successfully loaded, that the password matches
        // and active is not 1. If so, override the default error message.
        if ($user && \Hash::check($request->password, $user->password) && $user->is_verified != 1) {
            $errors = [$this->username() => trans('auth.notactivated')];
        }
//        elseif ($user && \Hash::check($request->password, $user->password)){
//
//
//
//        }
//        if ($user->is_verified == 0) {
//            MailController::SendSignUpEmail($user->first_name, $user->email, $user->verification_code);
//            $errors = ['no_verify' => trans('auth.notactivated')];
//
//        }
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);

//        return redirect()->back();
    }

    /**
     * The user has been authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @param mixed $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
//          dd($user);
    }

    public function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['is_verified' => 1]);
    }
}
