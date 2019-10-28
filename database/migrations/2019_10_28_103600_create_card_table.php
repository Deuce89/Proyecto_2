<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjeta', function (Blueprint $table) {
            $table->bigIncrements('cod_tarjeta');
            $table->integer('cod_cliente');
            $table->integer('cod_seguridad');
            $table->date('fecha_vencimiento');
            $table->varchar('titular', 30);
            $table->timestamps();
        });
        Schema::table('tarjeta', function (Blueprint $table) {
            $table->foreign('cod_cliente')->references('cod_cliente')->on('cliente');
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