<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    protected $table = 'seguro';

    protected $fillable = [
        'nombre',
        'categoria',
        'pertenencia',
        'porcentaje',
        'valor',
        'pago',
        'valor_cobertura',
        'unidad_cobertura',
        'aseguradora',
        'estado'
    ];
}
