<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class modelVacaciones extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_vacaciones';  

    protected $fillable = ['fecha_inicio', 'fecha_fin', 'dias_solicitados', 'comentarios', 'fecha_Aprobacion', 'id_empleado'];

     protected $dates = ['fecha_inicio', 'fecha_fin', 'fecha_Aprobacion'];

    public function empleado()
    {
        return $this->belongsTo(modelEmpleados::class, 'id_empleado', 'id_empleado');
    }
}
