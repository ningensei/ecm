<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Profesores extends Model
{
    use CrudTrait;

    protected $table = 'profesores';
    protected $fillable = ['texto', 'imagen'];

    public $timestamps = true;

    public function setImagenAttribute($value)
    {
        $attribute_name = "imagen";
        $disk = "public";
        $destination_path = "uploads/profesores";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
