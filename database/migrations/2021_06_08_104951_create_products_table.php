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
            $table->increments('id');
            $table->string('name_am');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('desc_am');
            $table->string('desc_ru');
            $table->string('desc_en');
            $table->string('detail_am');
            $table->string('detail_ru');
            $table->string('detail_en');
            $table->string('slug_am');
            $table->string('slug_ru');
            $table->string('slug_en');
//            $table->string('sub_cat');
            $table->string('total_count');
            $table->float('price');
            $table->integer('percent')->nullable();
            $table->string('size_type')->nullable();
            $table->string('material_type')->nullable();
            $table->string('gift')->nullable();
            $table->integer('gender_id')->default(0);
            $table->string('custom_material')->nullable();
            $table->string('status')->default(1);
            $table->integer('store_id');
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
