<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function sub_menues()
    {
        return $this->hasMany(Sub_menu::class,'menu_id', 'id');
    }

}
