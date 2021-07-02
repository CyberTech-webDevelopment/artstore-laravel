<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsDecorationMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_decoration_materials', function (Blueprint $table) {
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('materials_id')->unsigned()->index();
            $table->foreign('materials_id')->references('id')->on('decoration_materials')->onDelete('cascade');
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
        Schema::dropIfExists('products_decoration_materials');
    }
}
