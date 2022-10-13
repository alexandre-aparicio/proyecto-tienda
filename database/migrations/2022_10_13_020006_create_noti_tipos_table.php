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
        Schema::create('noti_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 300);
            $table->timestamps();
            $table->string('tipo_url', 300);
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('noti_tipo');
    }
};
