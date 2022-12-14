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
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('notitipos_id');
            $table->unsignedInteger('usuario_id');
            $table->string('asunto', 300);
            $table->mediumText('cuerpo');           
            $table->integer('leido');
            $table->integer('importante');
            $table->integer('marcado');
            $table->timestamps();
            $table->foreign('notitipos_id')->references('id')->on('noti_tipos');
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
        Schema::dropIfExists('notificaciones');
    }
};
