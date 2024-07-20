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
        Schema::table('model_asistencias', function (Blueprint $table) {
            $table->string('tipo_falta_justi');
            $table->string('motivo_justi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('model_asistencias', function (Blueprint $table) {
            $table->dropColumn(['tipo_falta_justi', 'motivo_justi']);
        });
    }
};
