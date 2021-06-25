<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $con_size;
    public $con_material;


    public function product_store()
    {
        return $this->hasOne(Shop::class,'user_id', 'id');
    }

    public function setnNameForSizeRelation()
    {
        $this->con_size = "App\Models\\" . ucfirst($this->size_type);
        return new $this->con_size;
    }
    public function product_sizes()
    {
      return $this->belongsToMany($this->setnNameForSizeRelation(),"products_" . $this->size_type,'product_id','size_id');

    }

    public function setnNameForMaterialRelation()
    {
        $this->con_material = "App\Models\\" . ucfirst($this->material_type);
        return new $this->con_material;
    }
    public function product_materials()
    {
      return $this->belongsToMany($this->setnNameForMaterialRelation(),"products_" . $this->material_type,'product_id','materials_id');

    }

    public function product_colors()
    {
        return $this->belongsToMany(Colors::class,'products_colors','product_id','color_id');
    }

    public function product_gender()
    {
        return Gender::find($this->gender_id);

    }

    public function product_images()
    {
        return DB::table('products_images')
               ->where('product_id',$this->id)
               ->get();


    }
    public function product_head_images()
    {
        $image_obj =  DB::table('products_images')
               ->where('product_id',$this->id)
               ->where('main',1)
               ->first();

        return $image_obj->image;

    }
}
