<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Home extends Model
{
    use CrudTrait;

    protected $table = 'home';

    public $timestamps = true;

}
