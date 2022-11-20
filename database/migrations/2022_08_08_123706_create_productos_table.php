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
            $table->id();
            $table->string('nombre');
            $table->text('caracteristica');
            $table->integer('precio');
            $table->text('descripcion');
            $table->timestamps();
            $table->unsignedBigInteger('color_id')->onDelete('cascade');
            $table->unsignedBigInteger('tamaño_id')->onDelete('cascade');

            //referencias

            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('tamaño_id')->references('id')->on('tamaños');
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
