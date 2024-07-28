<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelNominas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_empleado',
        'fecha_pago',
        'correo',
        'sueldo_bruto',
        'sueldo_neto',
        'deduccion_isr',
        'deduccion_imss',
        'concepto_deduccion',
        'deducciones',
        'concepto_bono',
        'bonos',
        'estado_nomina'
    ];
}