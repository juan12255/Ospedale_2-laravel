<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especialista extends Model
{
    use HasFactory;

    protected $fillable = [
        'Especialidad',
        'Nombres',
        'Documento',
        'Finicio',
        'Ffin',
        'Fpoliza',
        'Correo',
        'Telefono',
        'Estado',
    ];
}
