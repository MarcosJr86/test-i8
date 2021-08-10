<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorios', function (Blueprint $table) {
            $table->id("id_repositorio");
            $table->string("nombre_repositorio",100);
            $table->string("descripcion_repositorio",120);
            $table->timestamps();

            $table->unsignedBigInteger("user_id")->nullable();
            $table->foreign("user_id")->references("user_id")->on("users")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repositorios');
    }
}
