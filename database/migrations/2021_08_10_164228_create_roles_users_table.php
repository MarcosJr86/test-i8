<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_users', function (Blueprint $table) {
            $table->id("id rol_user");
            $table->timestamps();

            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("id_rol");

            $table->foreign("user_id")->references("user_id")->on("users")->onDelete("cascade");
            $table->foreign("id_rol")->references("id_rol")->on("roles")->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_users');
    }
}
