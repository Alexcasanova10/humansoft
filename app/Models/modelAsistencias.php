<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelAsistencias extends Model
{
    use HasFactory;

    protected $table = 'model_asistencias';  

    protected $primaryKey = 'id_empleado';  

    protected $fillable = [
        'estado_asistencia', 'fecha', 'justificante', 'id_empleado', 'tipo_falta_justi', 'motivo_justi'
    ];

    public function empleado()
    {
        return $this->belongsTo(modelEmpleados::class, 'id_empleado', 'id_empleado');
    }
}

