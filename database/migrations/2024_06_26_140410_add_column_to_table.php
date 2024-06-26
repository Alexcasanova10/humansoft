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
        Schema::table('model_empleados', function (Blueprint $table) {
 

            $table->string('curp');
            $table->string('nss');
            $table->enum('estado_civil', ['soltero', 'casado', 'divorciado', 'viudo']);
            $table->string('calle');
            $table->string('num_exterior');
            $table->string('num_interior')->nullable();
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('ciudad');
            $table->date('fecha_baja')->nullable();; //   `fecha_baja` date DEFAULT NULL, // solo se pone si el empleado esta inactivo y agarra la fecha del momento que se pone inactivo

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('model_empleados', function (Blueprint $table) {
            $table->dropColumn('curp');
            $table->dropColumn('nss');
            $table->dropColumn('estado_civil');
            $table->dropColumn('calle');
            $table->dropColumn('num_exterior');
            $table->dropColumn('num_interior');
            $table->dropColumn('colonia');
            $table->dropColumn('codigo_postal');
            $table->dropColumn('ciudad');
            $table->dropColumn('fecha_baja');
        });
    }
};










