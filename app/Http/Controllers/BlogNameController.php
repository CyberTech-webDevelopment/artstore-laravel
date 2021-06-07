<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogNameController extends Controller
{public function blog_name(){
    return view('blog.blog-name');
}
}
