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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mentipo_id');
            $table->unsignedInteger('usuario_id');
            $table->string('asunto', 300);
            $table->mediumText('cuerpo');           
            $table->integer('leido');
            $table->integer('importante');
            $table->integer('marcado');
            $table->timestamps();
            $table->foreign('mentipo_id')->references('id')->on('men_tipos');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
};
