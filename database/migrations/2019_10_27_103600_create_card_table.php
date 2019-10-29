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
            //$table->integer('cod_cliente');
            $table->integer('cod_seguridad');
            $table->date('fecha_vencimiento');
            $table->string('titular', 30);
            $table->timestamps();
        });
        Schema::table('tarjeta', function (Blueprint $table) {
            $table->bigInteger('tarjeta_cod_cliente')->unsigned();
            $table->foreign('tarjeta_cod_cliente')->references('cod_cliente')->on('cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('tarjeta', function(Blueprint $table){
        //$table->dropForeign('tarjeta_tarjeta_cod_cliente_foreign');
        //});
        
        Schema::dropIfExists('detallecompra');
    }
}