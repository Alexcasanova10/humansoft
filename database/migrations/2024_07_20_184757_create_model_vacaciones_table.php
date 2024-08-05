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
        Schema::create('model_vacaciones', function (Blueprint $table) {
            $table->id('id_vacaciones');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('dias_solicitados');
            $table->string('comentarios');
            $table->date('fecha_Aprobacion');
            
          $table->unsignedBigInteger('id_empleado');
         $table->foreign('id_empleado')
               ->references('id_empleado')
               ->on('model_empleados')
               ->onDelete('cascade');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_vacaciones');
    }
};
