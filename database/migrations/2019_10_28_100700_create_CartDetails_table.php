<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailTable extends Migration
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
            $table->varchar('tipo_pago', 20);
            $table->integer('no_tarjeta');
            $table->integer('cod_segurida');
            $table->date('fecha_vencimiento');
            $table->varchar('titular', 30);
            $table->Integer('cod_carrocompra');
            $table->timestamps();
        });
        Schema::table('detallecompra', function (Blueprint $table) {
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
        Schema::dropIfExists('detallecompra');
    }
}