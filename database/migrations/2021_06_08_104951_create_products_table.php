<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_am');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('desc_am');
            $table->string('desc_ru');
            $table->string('desc_en');
            $table->string('detail_am');
            $table->string('detail_ru');
            $table->string('detail_en');
            $table->string('sub_cat');
            $table->string('quantity');
            $table->float('price');
            $table->integer('percent');
            $table->string('size_type');
            $table->string('material_type');
            $table->string('custom_material')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
