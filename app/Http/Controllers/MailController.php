<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Mail\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function SendSignUpEmail($name, $email, $verification_code)
    {
        $data = [

            "name" => $name,
            "verification_code" => $verification_code,

        ];
        Mail::to($email)->send(new SignUp($data));

    }

    public static function ResetPasswordEmail($name, $email, $reset_token)
    {
        $data = [
            "name" => $name,
            "reset_token"=>$reset_token,
            "email"=>$email,
        ];
        Mail::to($email)->send(new ResetPassword($data));


    }
}
