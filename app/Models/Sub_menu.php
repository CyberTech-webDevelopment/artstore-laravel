<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_menu extends Model
{
    use HasFactory;

    public function sub_categories()
    {
        return $this->belongsToMany(Sub_categories::class,'sub_categories_sub_menus','sub_menu_id','sub_category_id');

    }

}
