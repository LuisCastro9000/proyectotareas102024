<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $table = 'tareas';
    protected $primaryKey = 'IdTarea';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'IdTarea',
        'DNI',
        'Titulo',
        'Descripcion',
        'FechaVencimiento',
        'FechaCreacion',
        'Estado',
        'Activo',
        
    ];


}
