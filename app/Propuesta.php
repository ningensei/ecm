<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Propuesta extends Model
{
    use CrudTrait;

    protected $table = 'propuesta';
    protected $fillable = ['seo_title', 'seo_description', 'seo_keywords', 'texto_1', 'texto_2', 'texto_3', 'imagen'];

    public $timestamps = true;

    public function setImagenAttribute($value)
    {
        $attribute_name = "imagen";
        $disk = "public";
        $destination_path = "uploads/propuesta";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
