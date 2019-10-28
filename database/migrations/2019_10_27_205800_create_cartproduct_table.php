<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_carro', function (Blueprint $table) {
            $table->bigIncrements('cod_prodcarro');
            $table->integer('cod_carrocompra');
            $table->integer('cod_producto');
            $table->timestamps();
        });
        Schema::table('producto_carro', function (Blueprint $table) {
            $table->foreign('cod_carrocompra')->references('cod_carrocompra')->on('carrocompra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_carro');
    }
}