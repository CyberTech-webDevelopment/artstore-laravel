<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;


    public $con_size;
    public $con_material;


    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug_am = Str::slug($product->name_am);
            $product->slug_ru = Str::slug($product->name_ru);
            $product->slug_en = Str::slug($product->name_en);


            $latestSlug_am =
                static::whereRaw("slug_am = '$product->slug_am' or slug_am LIKE '$product->slug_am-%'")
                    ->latest('id')
                    ->value('slug_am');
            if ($latestSlug_am) {
                $pieces = explode('-', $latestSlug_am);

                $number = intval(end($pieces));

                $product->slug_am .= '-' . ($number + 1);
            }

            $latestSlug_ru =
                static::whereRaw("slug_ru = '$product->slug_ru' or slug_ru LIKE '$product->slug_ru-%'")
                    ->latest('id')
                    ->value('slug_ru');
            if ($latestSlug_ru) {
                $pieces = explode('-', $latestSlug_ru);

                $number = intval(end($pieces));

                $product->slug_ru .= '-' . ($number + 1);
            }

            $latestSlug_en =
                static::whereRaw("slug_en = '$product->slug_en' or slug_en LIKE '$product->slug_en-%'")
                    ->latest('id')
                    ->value('slug_en');
            if ($latestSlug_en) {
                $pieces = explode('-', $latestSlug_en);

                $number = intval(end($pieces));

                $product->slug_en .= '-' . ($number + 1);
            }
        });
//        static::updating(function ($update) {
//            $update->slug_am = Str::slug($update->name_am);
//            $update->slug_ru = Str::slug($update->name_ru);
//            $update->slug_en = Str::slug($update->name_en);
//
//
//            $latestSlug_am =
//                static::whereRaw("slug_am = '$update->slug_am' or slug_am LIKE '$update->slug_am-%'")
//                    ->latest('id')
//                    ->value('slug_am');
//            if ($latestSlug_am) {
//                $pieces = explode('-', $latestSlug_am);
//
//                $number = intval(end($pieces));
//
//                $update->slug_am .= '-' . ($number + 1);
//            }
//
//            $latestSlug_ru =
//                static::whereRaw("slug_ru = '$update->slug_ru' or slug_ru LIKE '$update->slug_ru-%'")
//                    ->latest('id')
//                    ->value('slug_ru');
//            if ($latestSlug_ru) {
//                $pieces = explode('-', $latestSlug_ru);
//
//                $number = intval(end($pieces));
//
//                $update->slug_ru .= '-' . ($number + 1);
//            }
//
//            $latestSlug_en =
//                static::whereRaw("slug_en = '$update->slug_en' or slug_en LIKE '$update->slug_en-%'")
//                    ->latest('id')
//                    ->value('slug_en');
//            if ($latestSlug_en) {
//                $pieces = explode('-', $latestSlug_en);
//
//                $number = intval(end($pieces));
//
//                $update->slug_en .= '-' . ($number + 1);
//            }
//
//        });
    }

    public function product_store()
    {
        return $this->hasOne(Shop::class, 'id', 'store_id');
    }

    public function product_type()
    {
        return $this->belongsToMany(Sub_categories::class, 'products_sub_categories', 'product_id', 'type_id');


    }

    public function product_options()
    {
        return $this->hasMany(Product_Options::class, 'product_id', 'id');
    }

    public function setnNameForSizeRelation()
    {
        $this->con_size = "App\Models\\" . ucfirst($this->size_type);

        if ($this->con_size != 'App\Models\\') {
            return new $this->con_size;

        } else {
            return null;
        }

    }
//    public function size_all_option()
//    {
//        return $this->hasManyThrough('product_options', 'Product', 'size', 'id');
//    }
    public function product_sizes()
    {
        return $this->belongsToMany($this->setnNameForSizeRelation(), "products_options", 'product_id', 'size');

    }


    public function setnNameForMaterialRelation()
    {
        $this->con_material = "App\Models\\" . ucfirst($this->material_type);
        if ($this->con_material != 'App\Models\\') {
            return new $this->con_material;

        } else {
            return null;
        }

    }

    public function product_materials()
    {
        return $this->belongsToMany($this->setnNameForMaterialRelation(), "products_options", 'product_id', 'material');

    }

    public function product_colors()
    {
        return $this->belongsToMany(Colors::class, 'products_options', 'product_id', 'color');
    }

    public function product_gender()
    {
        return Gender::find($this->gender_id);

    }

    public function product_author()
    {
        return Users::find($this->user_id);

    }

    public function discounted_price()
    {
        $discount = ($this->price * $this->percent) / 100;
        return $this->price - $discount;

    }

    public function product_images()
    {
        return DB::table('products_images')
            ->where('product_id', $this->id)
            ->get();


    }

    public function product_head_images()
    {
        $image_obj = DB::table('products_images')
            ->where('product_id', $this->id)
            ->where('main', 1)
            ->first();

        return $image_obj->image;

    }

    public static function products_filtrs($products, $category_type)
    {
        $filter_option = [
            'percent' => null,
            'sub_menu' => null,
            'sub_cat' => null,
            'color' => null,
            'material' => null,
            'size' => null,
            'gender' => null,
        ];
        if ($category_type == 1) {
            $filter_option['sub_menu'] = true;
            $filter_option['sub_cat'] = true;
        }
        if ($category_type == 2) {
            $filter_option['sub_cat'] = true;
        }
        foreach ($products as $item) {
            if ($item->percent != null) {
                $filter_option['percent'] = true;
            }
            if ($item->size_type != null) {
                $filter_option['size'] = true;
            }
            if ($item->material_type != null) {
                $filter_option['material'] = true;
            }
            if (count($item->product_colors) > 0) {
                $filter_option['color'] = true;
            }
            if ($item->gender_id != 0) {
                $filter_option['gender'] = true;
            }
        }
        return $filter_option;
    }
}
