<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Cursos extends Model
{
    use CrudTrait;

    protected $table = 'cursos';
    protected $fillable = ['seo_title', 'seo_description', 'seo_keywords', 'titulo', 'imginterna','descripcion', 'objetivos', 'plan_estudio'];

    public $timestamps = true;

    public function setImginternaAttribute($value)
    {
        $attribute_name = "imginterna";
        $disk = "public";
        $destination_path = "uploads/clases";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
