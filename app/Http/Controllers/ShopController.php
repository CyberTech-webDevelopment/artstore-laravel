<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function add_store(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [

            'store_name' => 'required',
            'store_desc' => 'required|min:20',
            'store_style' => 'required',
            'files' => 'required',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
        if ($validator->fails()) {
            $errors = $validator->failed();
//            dd($errors);
            $fields_array = [];
            foreach ($errors as $err => $value) {
                foreach ($value as $key => $v) {
                    if ($key == 'Required') {
                        return response()->json(['store_error' => 'Please fill all required fields']);
                    }
                    if ($key == 'Min') {

                        array_push($fields_array, $err);
                        $message_error = "field length " . $key;
                        foreach ($v as $el) {
                            $message_error = $message_error . ":" . $el;

                        }

                    }
                }

            }
            return response()->json(['store_error' => $message_error, 'field' => $fields_array]);

        }
        $store = new Shop();

        if ($request->hasfile('background_image'))
        {
            $image = $request->file('background_image');
            $background_name = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move(public_path() . '/storage/store_back/', $background_name);
            $store->background = $background_name;
        }
        $store_logo = $request->input('files');
        $store_logo = str_replace('data:image/png;base64,', '', $store_logo);
        $img = str_replace(' ', '+', $store_logo);
        $imageName = uniqid() . '.' . 'png';
        \File::put(public_path() . '/storage/store_logo/' . $imageName, base64_decode($img));
        $store->logo = $imageName;

        $store->name = $request->store_name;
        $store->description = $request->store_desc;
        $store->page_type = $request->store_style;
        $store->use_name = $request->use_name;
        $store->use_avatar = $request->use_avatar;
        $store->user_id = Auth::user()->id;
        $save_store =  $store->save();
        $user = Users::find(Auth::user()->id);
        $user->shop = 1;
        $user->save();
        if ($save_store)
        {
            return response()->json(['name'=>$store->name]);
        }


    }
}
