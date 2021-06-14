<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BestSellerController extends Controller
{
    public function best_seller()
    {
        return view('bestseller.bestseller');
    }
}
