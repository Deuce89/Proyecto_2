<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecompra', function (Blueprint $table) {
            $table->bigIncrements('cod_detallecompra');
            $table->string('tipo_pago', 20);
            $table->integer('no_tarjeta');
            $table->integer('cod_segurida');
            $table->date('fecha_vencimiento');
            $table->string('titular', 30);
            $table->Integer('cod_carrocompra');
            $table->timestamps();
        });
        Schema::table('detallecompra', function (Blueprint $table) {
            $table->bigInteger('detallecompra_cod_carrocompra')->unsigned();
            $table->foreign('detallecompra_cod_carrocompra')->references('cod_carrocompra')->on('carrocompra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('detallecompra', function(Blueprint $table){
        //$table->dropForeign('detallecompra_detallecompra_cod_carrocompra_foreign');
        //});
        
        Schema::dropIfExists('detallecompra');
    }
}