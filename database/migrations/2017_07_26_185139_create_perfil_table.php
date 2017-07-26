<?php

/** 
    Developer: Luis Quisbert
    Date: 26/07/17
    Hour: 18:44
    Comment: Migration table perfil
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lvl_pro');
            $table->datetime('ini_pro');
            $table->datetime('end_pro');
            $table->integer('id_user')->unsigned();            
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('profile');
    }
}
