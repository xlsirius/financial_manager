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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            //-------------Relacion Usuario-------------
             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')
             ->references('id')->on('users');
            //---------------------------------------
            //-------------Relacion Tipo_animal--------
             $table->unsignedBigInteger('tipo_animal_id');
             $table->foreign('tipo_animal_id')
             ->references('id')->on('tipo_animals');
            //---------------------------------------
            //-------------Relacion Tipo_animal--------
             $table->unsignedBigInteger('tipo_producto_id');
             $table->foreign('tipo_producto_id')
             ->references('id')->on('tipo_productos');
            //---------------------------------------
            $table->string('nombre');
            $table->string('marca')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('cantidad');
            $table->integer('precion_base');
            $table->integer('precion_venta');
            $table->integer('impuesto')->nullable();
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
        Schema::dropIfExists('productos');
    }
};
