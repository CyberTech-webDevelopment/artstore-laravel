<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Product;

class Basket extends Model
{
    use HasFactory;

    public static function user_basket_count()
    {
        if (Auth::check()) {
            return self::where('user_id', Auth::user()->id)->count();

        } else {
            return 0;

        }

    }

    public static function user_basket_stores()
    {
        $stores_ids = self::where('user_id', Auth::user()->id)->pluck('store_id')->toArray();

        return Shop::whereIn('id', $stores_ids)->get();

    }

    public function basket_product($id)
    {
        return Product::where('id', $id)->first();

    }

    public function product_total_price($price)
    {
        return $this->quantity * $price;
    }

    public static function basket_product_count($product_id)
    {
        $quantities = self::where('product_id', $product_id)->pluck('quantity')->toArray();
        $in_product_count = 0;
        if (count($quantities) > 0) {

            foreach ($quantities as $q) {
                $in_product_count += intval($q);

            }

        }
        return $in_product_count;

    }

}
