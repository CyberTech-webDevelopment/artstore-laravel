<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    public function sub_categories()
    {
        return $this->hasMany(Product::class,'shop_id', 'id');
    }
}
