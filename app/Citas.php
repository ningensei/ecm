<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Citas extends Model
{
    use CrudTrait;

    protected $table = 'citas';
    protected $fillable = ['texto', 'autor', 'edad'];

    public $timestamps = true;

}
