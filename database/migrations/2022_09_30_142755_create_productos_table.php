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
            $table->unsignedInteger('catpadrote_id'); 
            $table->timestamps();
            $table->double('precio', 8, 2);
            $table->string('nombre', 300);
            $table->string('descripcion');            
            $table->string('imagen_url', 300); 
            $table->foreign('catpadrote_id')->references('id')->on('cat_padrotes');           
                      
             
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
