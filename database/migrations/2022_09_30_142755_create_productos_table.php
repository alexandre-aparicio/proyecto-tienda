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
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->double('precio', 8, 2);
            $table->string('nombre', 300);
            $table->unsignedInteger('categoria_id'); 
            $table->string('imagen_url', 300); 
            $table->foreign('categoria_id')->references('id')->on('categorias');           
                      
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
