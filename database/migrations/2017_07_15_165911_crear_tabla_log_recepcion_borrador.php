<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLogRecepcionBorrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_recepcion_borrador', function (Blueprint $table) {
            $table->string('id', 255);
            $table->integer('incremento');
            $table->string('servidor_id', 4);
            $table->string('movimiento_id', 255);
            $table->string('usuario_id', 255);
            
            $table->string('ip', 15);
            $table->string('navegador', 255);
            $table->string('accion', 255);
            
            $table->foreign('movimiento_id')->references('id')->on('movimientos');
            $table->primary('id');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_recepcion_borrador');
    }
}
