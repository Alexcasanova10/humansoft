<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelPendientes extends Model
{
    use HasFactory;    
    protected $fillable = ['texto', 'estado_task'];

}
