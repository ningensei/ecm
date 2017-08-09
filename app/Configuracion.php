<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Configuracion extends Model
{
    use CrudTrait;

    protected $table = 'configuracion';
    protected $fillable = ['texto_contacto', 'direccion', 'email', 'telefono'];

    public $timestamps = true;

}
