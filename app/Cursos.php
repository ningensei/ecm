<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Cursos extends Model
{
    use CrudTrait;

    protected $table = 'cursos';
    protected $fillable = ['titulo', 'descripcion', 'objetivos', 'plan_estudio'];

    public $timestamps = true;

}
