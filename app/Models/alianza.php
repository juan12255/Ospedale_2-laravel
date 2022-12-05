<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alianza extends Model
{
    use HasFactory;

    protected $fillable = [
        'Razon_Social',
        'Nit',
        'Representante',
        'Objeto',
        'FinicioA',
        'FfinA',
        'Prorroga',
        'Camara',
        'Correo',
        'Telefono',
        'Supervisor',
        'EstadoA'
    ];
}
