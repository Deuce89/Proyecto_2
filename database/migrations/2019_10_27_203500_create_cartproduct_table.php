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
        Schema::create('productocarro', function (Blueprint $table) {
            $table->bigIncrements('cod_prodcarro');
            $table->integer('cod_carrocompra');
            $table->integer('cod_producto');
            $table->timestamps();
        });
        Schema::table('productocarro', function (Blueprint $table) {
            $table->bigInteger('productocarro_cod_carrocompra')->unsigned();
            $table->foreign('productocarro_cod_carrocompra')->references('cod_carrocompra')->on('carrocompra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('productocarro', function(Blueprint $table){
        //$table->dropForeign('productocarro_productocarro_cod_carrocompra_foreign');
        //});
        
        Schema::dropIfExists('productocarro');
    }
}