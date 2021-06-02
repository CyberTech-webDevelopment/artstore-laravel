<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use App\Models\Users;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'privacy' => ['required']

            // 'g-recaptcha-response' => ['required','captcha'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     */

    public function register(Request $request)
    {

        $validator = $this->validator($request->all());
//        $messages = [
//            'email.unique:users' => 'This email is already exists',
//        ];
        if (isset($validator) && $validator->fails()) {
            $failedRules = $validator->failed();
            if (isset($failedRules['email']['Unique'])) {

                return redirect()->back()
                    ->with('modal_type', ['register_failed'])
                    ->with('reg_failed', trans('auth.reg_email_exists', [], App::getLocale()));

            } else {
                return redirect()->back()
                    ->with('modal_type', ['register_failed'])
                    ->with('reg_failed', trans('auth.reg_empty_field', [], App::getLocale()));

            }


        }
        $user = new Users();
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Hash::make($request->post('password'));
        $user->verification_code = sha1(time());
        $user->save();
        if ($user != null) {
//          Send Email and Show Message
            MailController::SendSignUpEmail($user->name, $user->email, $user->verification_code);

            return redirect()->back()->with('modal_type', ['check_email']);

        }
//         Show error message

        return redirect()->back()->with('modal_type', ['conn_error']);

    }
    // protected function create(array $data)
    // {
    //     // dd($data);
    //     return Users::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
