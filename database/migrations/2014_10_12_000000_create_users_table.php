<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('apellido')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('ultima_conexion')->nullable();
            $table->string('privilegio')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });

        Schema::create('datos', function (Blueprint $table) {
            $table->bigIncrements('id_dt');
            $table->unsignedBigInteger('id'); // relacion con usuario
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->string('cedula')->unique();
            $table->string('carnet')->nullable();
            $table->string('edad')->nullable();
            $table->string('telefono')->nullable();
            $table->timestamps();
        });


        Schema::create('imagens', function (Blueprint $table) {
            $table->bigIncrements('id_img');
            $table->unsignedBigInteger('id'); // relacion con usuario
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->string('url')->nullable();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('datos');
        Schema::dropIfExists('imagen');
    }
}
