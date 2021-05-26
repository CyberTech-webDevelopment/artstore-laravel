<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    public function subscribe(Request $request)
    {
        $subscribe= new Subscribe();
        $email=$request->email;
        $uniqu=Subscribe::where('email', $email)->first();
        if($uniqu==null){
            $subscribe->email=$email;
            $subscribe->save();
            if($subscribe){
                return response()->json(['insert'=>'successfully subscribed']);
            }
            else{
                return response()->json(['no'=> 'error']);
            }
        }
        else{
            return response()->json(['isset'=>'This email already exists']);
        }
    }
}
