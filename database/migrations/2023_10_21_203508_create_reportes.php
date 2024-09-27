<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
              $table->string('category_id')->nullable();
          $table->string('subcategory_id')->nullable();
          $table->string('tipo_id')->nullable();         
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('datos_id');
            $table->string('detalle')->nullable();
            $table->string('municipio')->nullable();
            $table->string('parroquia')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('direccion')->nullable();
            $table->string('estatus')->nullable();

            $table->timestamps();

            // Definir las claves foráneas
        
          
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('datos_id')->references('id_dt')->on('datos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('datos');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('tipos');
        Schema::dropIfExists('reportes');
    }
}
