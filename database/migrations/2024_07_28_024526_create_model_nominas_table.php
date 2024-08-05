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
        Schema::create('model_nominas', function (Blueprint $table) {
            $table->id('id_nomina');
            $table->date('fecha_pago');
            $table->string('correo');
            $table->decimal('sueldo_bruto', 8, 2);  
            $table->decimal('sueldo_neto', 8, 2);
            $table->decimal('deduccion_isr', 8, 2);
            $table->decimal('deduccion_imss', 8, 2);

            $table->string('concepto_deduccion');
            $table->decimal('deducciones', 8, 2)->nullable();
            $table->string('concepto_bono');
            $table->decimal('bonos', 8, 2)->nullable();
            $table->string('estado_nomina')->default('pendiente');   
            $table->timestamps();

 
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
        Schema::dropIfExists('model_nominas');
    }
};
