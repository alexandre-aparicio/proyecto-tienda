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
        Schema::create('cat_padrotes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categoriapadre_id');
            $table->string('nombre', 300);
            $table->timestamps();
            $table->string('imagen_url', 300);            
            $table->foreign('categoriapadre_id')->references('id')->on('cat_padres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_padrotes');
    }
};
