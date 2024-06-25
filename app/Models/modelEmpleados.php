<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelEmpleados extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido_pat'];   
    protected $primaryKey = 'id_empleado';


}
