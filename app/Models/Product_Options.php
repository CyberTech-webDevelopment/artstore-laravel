<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product_Options extends Model
{
    use HasFactory;

    protected $table = "products_options";
    public $con_size;
    public $con_material;

    public function option_belong_product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');


    }

    public function setnNameForSizeRelation()
    {
        $size_type = $this->option_belong_product->size_type;
        $this->con_size = "App\Models\\" . ucfirst($size_type);

        if ($this->con_size != 'App\Models\\') {
            return new $this->con_size;

        } else {
            return null;
        }

    }

    public function size_option()
    {
        return $this->hasOne($this->setnNameForSizeRelation(), 'id', 'size');
    }

    public function setnNameForMaterialRelation()
    {
        $material_type = $this->option_belong_product->material_type;
        $this->con_material = "App\Models\\" . ucfirst($material_type);

        if ($this->con_material != 'App\Models\\') {
            return new $this->con_material;

        } else {
            return null;
        }

    }

    public function material_option()
    {
        return $this->hasOne($this->setnNameForMaterialRelation(), 'id', 'material');
    }

    public function color_option()
    {
        return $this->hasOne(Colors::class, 'id', 'color');
    }
}
