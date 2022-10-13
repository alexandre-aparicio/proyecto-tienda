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
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificador', 300);
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('detallecompra_id');
            $table->double('total', 8, 2);
            $table->mediumText('cuerpo');           
            $table->string('imagen_url', 300);
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('detallecompra_id')->references('id')->on('detalle_compras');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};
