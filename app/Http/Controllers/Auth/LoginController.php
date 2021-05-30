<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

//    use AuthenticatesUsers;
      use AuthenticatesUsers {
          logout as performLogout;
      }

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


    /**
     * Validate the user login request.
     *
     * @param \Illuminate\Http\Request $request

     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {

        $messages=[
            'email.required' => trans('auth.failed', [], App::getLocale()),
            'password.required' => trans('auth.password', [], App::getLocale()),
        ];
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed',[],App::getLocale()), 'password' => 'auth.password',[],App::getLocale()];

        $user = Users::where('email', $request->email)->first();
        // Check if user was successfully loaded, that the password matches
        // and active is not 1. If so, override the default error message.
        if ($user && \Hash::check($request->password, $user->password) && $user->is_verified != 1) {

            $errors = [$this->username() => trans('auth.notactivated',[],App::getLocale())];

        }

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

    }

    public function credentials(Request $request)
    {
//        dd($request->all());

        return array_merge($request->only($this->username(), 'password'), ['is_verified' => 1]);
    }

    public function redirectTo()
    {
        return app()->getLocale() . '/home';
    }
    public function logout(Request $request)
    {
      $this->performLogout($request);
      return redirect(app()->getLocale() . '/');

    }
}
