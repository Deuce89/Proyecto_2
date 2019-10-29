<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->bigIncrements('cod_categoria');
            $table->string('nombre', 45);
            $table->Integer('cod_subcategoria1');
            $table->Integer('cod_subcategoria2');
            $table->Integer('cod_subcategoria3');
            $table->timestamps();
        });
        Schema::table('categoria', function (Blueprint $table) {
            $table->bigInteger('categoria_cod_categoria')->unsigned();
            $table->foreign('categoria_cod_categoria')->references('cod_categoria')->on('categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('categoria', function(Blueprint $table){
        //$table->dropForeign('categoria_categoria_cod_categoria_foreign');
        //});
        
        Schema::dropIfExists('categoria');
        
    }
}