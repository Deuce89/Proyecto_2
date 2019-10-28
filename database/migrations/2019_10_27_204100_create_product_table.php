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
            $table->varchar('nombre', 45);
            $table->varchar('descripcion', 250);
            $table->float('precio', 10,2);
            $table->integer('catidad');
            $table->blob('foto');
            $table->Integer('cod_subcategoria');
            $table->Integer('cod_temporada');
            $table->timestamps();
        });
        Schema::table('producto', function (Blueprint $table) {
            $table->foreign('cod_subcategoria')->references('cod_subcategoria')->on('categoria');
        });
        Schema::table('producto', function (Blueprint $table) {
            $table->foreign('cod_temporada')->references('cod_temporada')->on('temporada');
        });
        Schema::table('producto', function (Blueprint $table) {
            $table->foreign('cod_prodcarro')->references('cod_prodcarro')->on('producto_carro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}