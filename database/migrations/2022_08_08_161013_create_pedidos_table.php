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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            
            $table->timestamps();




            $table->unsignedBigInteger('lineapedidos_id');
            $table->unsignedBigInteger('users_id');
            

            //referencias 

            $table->foreign('lineapedidos_id')->references('id')->on('lineapedidos');
            $table->foreign('users_id')->references('id')->on('users');

        });
    }
};