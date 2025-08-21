<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asesoria
 *
 * @property $id
 * @property $carrera
 * @property $grupo
 * @property $cuatrimestre
 * @property $materia
 * @property $maestro
 * @property $fecha_hora
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asesoria extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['carrera', 'grupo', 'cuatrimestre', 'materia', 'maestro', 'fecha_hora', 'observaciones'];


}
