<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function add_store(Request $request)
    {
        dd($request->all());
        return response()->json(['data'=>$request->all()]);

    }
}
