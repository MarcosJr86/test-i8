<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->id("id_perfil");
            $table->string("resumen_perfil",120);
            $table->string("sitio_web");
            $table->string("link_github",100);
            $table->timestamps();

            $table->unsignedBigInteger("user_id")->unique();
            $table->foreign("user_id")->references("user_id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
}
