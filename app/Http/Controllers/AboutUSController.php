<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUSController extends Controller
{
    public function about_us(){
        return view('about.about-us');
    }
}
