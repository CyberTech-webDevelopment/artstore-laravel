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

    //voroshel arka producti opcia uni ete opciai ete che @ndhanur qanak@
    public static function basket_product_original_count($product, $option_id)
    {
        $product_count = 0;
        if (count($product->product_options) > 0) {
            $product_count = Product_Options::find($option_id);
            $product_count = $product_count->quantity;

        } else {
            $product_count = $product->total_count;
        }
        return $product_count;
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

    public static function get_added_option($option_id)
    {
        return Product_Options::find($option_id);

    }

    public static function basket_product_count($product_id, $product, $option_id)
    {
        if ($option_id != null && count($product->product_options) > 0) {

            foreach ($product->product_options as $options) {

                if ($options->id = $option_id) {
                    $quantities = self::where('product_id', $product_id)->where('options_id', $option_id)->pluck('quantity')->toArray();
                    break;
                } else {

                    return false;
                }
            }

        } else {

            $quantities = self::where('product_id', $product_id)->pluck('quantity')->toArray();

        }
        $in_product_count = 0;
        if (count($quantities) > 0) {

            foreach ($quantities as $q) {
                $in_product_count += intval($q);

            }

        }

        return $in_product_count;

    }

    public function product_basket_option()
    {
        return Product_Options::find($this->options_id);
    }

    public function product_basket_options()
    {

        $this_option = [
            'size' => null,
            'material' => null,
            'color' => null,
        ];
        $options = Product_Options::find($this->options_id);
        if ($options->size_option != null) {

            $this_option['size'] = $options->size_option['size'];

        }
        if ($options->material_option != null) {

            $this_option['material'] = $options->material_option['material_' . app()->getLocale()];

        }

        if ($options->color_option != null) {

            $this_option['color'] = $options->color_option['color_name_' . app()->getLocale()];

        }
        return $this_option;
    }

}
