<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('cod_producto');
            $table->string('nombre', 50);
            $table->string('descripcion', 250);
            $table->float('precio', 10,2);
            $table->integer('catidad');
            $table->binary('foto');
            //$table->Integer('cod_subcategoria');
            //$table->Integer('cod_temporada');
            $table->timestamps();
        });
        Schema::table('producto', function (Blueprint $table) {
            $table->bigInteger('producto_cod_categoria')->unsigned();
            $table->bigInteger('producto_cod_temporada')->unsigned();
            $table->bigInteger('producto_cod_prodcarro')->unsigned();
            $table->foreign('producto_cod_categoria')->references('cod_categoria')->on('categoria')->onDelete('cascade');
            $table->foreign('producto_cod_temporada')->references('cod_temporada')->on('temporada')->onDelete('cascade');
            $table->foreign('producto_cod_prodcarro')->references('cod_prodcarro')->on('producto_carro')->onDelete('cascade');
        });
        //Schema::table('producto', function (Blueprint $table) {
            //$table->foreign('producto_cod_temporada')->references('cod_temporada')->on('temporada');
        //});
        //Schema::table('producto', function (Blueprint $table) {
            //$table->foreign('producto_cod_prodcarro')->references('cod_prodcarro')->on('producto_carro');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('producto', function(Blueprint $table){
        //$table->dropForeign('producto_producto_cod_subcategoria_foreign');
        //$table->dropForeign('producto_producto_cod_temporada_foreign');
        //$table->dropForeign('producto_producto_cod_prodcarro_foreign');
        //});
        
        Schema::dropIfExists('producto');
    }
}