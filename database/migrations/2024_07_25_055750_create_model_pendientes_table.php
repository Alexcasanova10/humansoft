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
        Schema::create('model_pendientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('texto'); //texto del bloque de tarea
            $table->string('estado_task'); //estado: ya sea completado o pendiente
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_pendientes');
    }
};
