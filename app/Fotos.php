<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Fotos extends Model
{
    use CrudTrait;

    protected $table = 'fotos';
    protected $fillable = ['titulo', 'imagen'];

    public $timestamps = true;

    public function setImagenAttribute($value)
    {
        $attribute_name = "imagen";
        $disk = "public";
        $destination_path = "uploads/fotos";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
