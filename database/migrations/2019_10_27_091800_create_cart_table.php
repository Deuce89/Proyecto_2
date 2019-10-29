<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrocompra', function (Blueprint $table) {
            $table->bigIncrements('cod_carrocompra');
            $table->timestamps();
        });
        Schema::table('carrocompra', function (Blueprint $table) {
            $table->bigInteger('cliente_cod_cliente')->unsigned();
            $table->foreign('cliente_cod_cliente')->references('cod_cliente')->on('cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('carrocompra', function(Blueprint $table){
        //$table->dropForeign('carrocompra_cliente_cod_cliente_foreign');
        //});
        
        Schema::dropIfExists('carrocompra');
        
        
    }
}