<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dash_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dashsubmenu_id');
            $table->string('titulo', 300);
            $table->string('enlace', 300);
            $table->timestamps();
            $table->string('icono', 300);            
            $table->foreign('dashsubmenu_id')->references('id')->on('dash_submenus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dash_menus');
    }
};
