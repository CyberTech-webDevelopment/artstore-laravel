<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(Request $request)
    {

        $product_images = $request->input('files');

        foreach ($product_images as $img) {

            $img = str_replace('data:image/png;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $imageName = uniqid() . '.' . 'png';
            \File::put(storage_path() . '/' . $imageName, base64_decode($img));


        }

        return response()->json(['img' => 'upload']);
    }
}
