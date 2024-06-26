<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelEmpleados extends Model
{
    use HasFactory;
    //fillable es para editar
    protected $fillable = ['nombre', 'apellido_pat', 'apellido_mat', 'telefono', 'estado_civil', 'puesto', 'salario'];   
    protected $primaryKey = 'id_empleado';


}
