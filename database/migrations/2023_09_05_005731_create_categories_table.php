<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
          $table->mediumText('descripcion');
            $table->timestamps();
        });


        Schema::create('subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categories_id'); // relacion con usuario
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('nombre')->string();
            $table->timestamps();
        });


        Schema::create('tipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subcategories_id'); // relacion con usuario
            $table->foreign('subcategories_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->string('nombre')->string();
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('Subcategories');
        Schema::dropIfExists('tipo');


    }
}
