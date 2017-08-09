<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Servicios extends Model
{
    use CrudTrait;

    protected $table = 'servicios';
    protected $fillable = ['titulo', 'descripcion', 'imagen'];

    public $timestamps = true;

    public function setImagenAttribute($value)
    {
        $attribute_name = "imagen";
        $disk = "public";
        $destination_path = "uploads/servicios";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
        

}
