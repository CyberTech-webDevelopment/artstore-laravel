<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function add_store(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [

            'store_name' => 'required',
            'store_desc' => 'required|min:20',
            'store_style' => 'requred',
            'files' => 'required',
//            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
        if ($validator->fails()) {
            $errors = $validator->failed();
//            dd($errors);
            $fields_array = [];
            foreach ($errors as $err => $value) {
                foreach ($value as $key => $v) {
                    if ($key == 'Required') {
                        return response()->json(['product_error' => 'Please fill all required fields']);
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

    }
}
