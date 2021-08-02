<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_categories extends Model
{
    use HasFactory;

    public function sub_menus()
    {
       return $this->belongsToMany(Sub_menu::class,'sub_categories_sub_menus','sub_category_id','sub_menu_id');

    }

    public function type_products()
    {
        return $this->belongsToMany(Product::class, 'products_sub_categories', 'type_id', 'product_id');


    }
}
