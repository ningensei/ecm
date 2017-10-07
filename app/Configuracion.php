<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Configuracion extends Model
{
    use CrudTrait;

    protected $table = 'configuracion';
    protected $fillable = ['seo_title', 'seo_description', 'seo_keywords', 'texto_contacto', 'direccion', 'email', 'telefono', 'favicon'];

    public $timestamps = true;

    public function setFaviconAttribute($value)
    {
        $attribute_name = "favicon";
        $disk = "public";
        $destination_path = "uploads/configuracion";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
