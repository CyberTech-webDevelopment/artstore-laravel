<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    public function order_product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');

    }
    public function order_total_cost()
    {
        $cost = 0;
        if ($this->order_product->percent != null)
        {
           $cost =  $this->order_product->discounted_price() * $this->quantity;
        }
        else
        {
            $cost =  $this->order_product->price * $this->quantity;
        }
        return $cost;

    }
    public function product_order_option()
    {
        return Product_Options::find($this->options_id);
    }
}
