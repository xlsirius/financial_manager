<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            //-------------Relacion Producto--------
             $table->unsignedBigInteger('producto_id');
             $table->foreign('producto_id')
             ->references('id')->on('productos');
            //---------------------------------------
            $table->integer('cantidad');
            $table->integer('valor');
            $table->integer('descuento');
            $table->dateTime('fecha_reg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
