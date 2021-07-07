<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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

    public function change_data(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name_change' => 'required|max:255',
            'new_pass_change' => 'nullable|min:8',
            'confirm_pass_change' => 'nullable|min:8',
            'email_change' => 'required|email',
        ]);
        if ($validator->fails()) {
            $errors = $validator->failed();
//            dd($errors);
            $fields_array = [];
            foreach ($errors as $err => $value) {
                foreach ($value as $key => $v) {
                    if ($key == 'Required') {
                        return response()->json(['change_error' => 'Please fill all required fields']);
                    }
                    if ($key == 'Email') {

                        $message_error = "Invalid value in the email field";
                        return response()->json(['change_error' => $message_error]);

                    }
                    if ($key == 'Min') {

                        array_push($fields_array, $err);
                        $message_error = "field length " . $key;
                        foreach ($v as $el) {
                            $message_error = $message_error . ":" . $el;

                        }

                    }
                    if ($key == 'Max') {

                        array_push($fields_array, $err);
                        $message_error = "field length " . $key;
                        foreach ($v as $el) {
                            $message_error = $message_error . ":" . $el;

                        }

                    }

                }

            }
            return response()->json(['change_error' => $message_error, 'field' => $fields_array]);

        }

        $user = Users::find(Auth::user()->id);
        $user_email = $user->email;
        $user->name = $request->name_change;
        if ($request->hasFile('avatar_change')) {
            if ($user->avatar != null) {
                unlink(public_path() . '/storage/avatar/' . $user->avatar);
                $image = $request->file('avatar_change');
                $avatar = uniqid() . "." . $image->getClientOriginalExtension();
                $image->move(public_path() . '/storage/avatar/', $avatar);
                $user->avatar = $avatar;

            } else {
                $image = $request->file('avatar_change');
                $avatar = uniqid() . "." . $image->getClientOriginalExtension();
                $image->move(public_path() . '/storage/avatar/', $avatar);
                $user->avatar = $avatar;

            }

        }
        if ($request->old_pass_change != null && $request->new_pass_change != null && $request->confirm_pass_change != null) {

            if (!Hash::check($request->old_pass_change, $user->password)) {

                return response()->json(['change_error' => 'Enter the correct password']);
            } else {
                if ($request->new_pass_change != $request->confirm_pass_change) {

                    return response()->json(['change_error' => 'Passwords do not match']);

                } else {
                    $user->password = Hash::make($request->new_pass_change);

                }

            }

        }
            $user->save();


        if ($user_email != $request->email_change) {


            MailController::ChangeEmail($user->name, $request->email_change, $user->verification_code);

            return response()->json(['check_email' => 'Sending']);

        }
        else
        {
            return response()->json(['change_success' => 'Your data changes successfuly']);
        }


    }

    public function delete_avatar()
    {
        $user = Users::find(Auth::user()->id);
        $del_avatar = $user->avatar;
        if($del_avatar != null)
        {
            unlink(public_path() . '/storage/avatar/' . $del_avatar);
            $user->avatar = null;
            $user->save();
            return redirect()->back()->with('modal_type',['del_avatar']);

        }
        else
        {
            return redirect()->back()->with('modal_type',['del_avatar'])->with('no_img','You are dont have avatar image');

        }


    }
}
