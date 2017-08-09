<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Noticias extends Model
{
    use CrudTrait;

    protected $table = 'noticias';
    protected $fillable = ['titulo', 'descripcion'];

    public $timestamps = true;

}
