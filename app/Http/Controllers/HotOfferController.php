<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotOfferController extends Controller
{
    public function hot_offer(){
        return view('hotoffer.hot-offer');
    }
}
