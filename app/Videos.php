<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Videos extends Model
{
    use CrudTrait;

    protected $table = 'videos';
    protected $fillable = ['titulo', 'url', 'descripcion'];

    public $timestamps = true;

}
