<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Clases extends Model
{
    use CrudTrait;

    protected $table = 'clases';
    protected $fillable = ['imginterna', 'imghome', 'titulo', 'descripcion_home', 'descripcion', 'info_gral', 'objetivos', 'plan_estudio', 'contenidos_teoricos'];

    public $timestamps = true;

    public function setImginternaAttribute($value)
    {
        $attribute_name = "imginterna";
        $disk = "public";
        $destination_path = "uploads/clases";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setImghomeAttribute($value)
    {
        $attribute_name = "imghome";
        $disk = "public";
        $destination_path = "uploads/clases";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
