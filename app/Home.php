<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Home extends Model
{
    use CrudTrait;

    protected $table = 'home';
    protected $fillable = ['video', 'slider1', 'mslide1', 'texto_slide1', 'slider2', 'mslide2', 'texto_slide2', 'slider3', 'mslide3', 'texto_slide3'];
    private $destination_path = 'uploads/home';
    private $disk = 'public';

    public $timestamps = true;

    public function setSlider1Attribute($value)
    {
        $this->uploadFileToDisk($value, 'slider1', $this->disk, $this->destination_path);
    }

    public function setSlider2Attribute($value)
    {
        $this->uploadFileToDisk($value, 'slider2', $this->disk, $this->destination_path);
    }

    public function setSlider3Attribute($value)
    {
        $this->uploadFileToDisk($value, 'slider3', $this->disk, $this->destination_path);
    }

    public function setMslide1Attribute($value)
    {
        $this->uploadFileToDisk($value, 'mslide1', $this->disk, $this->destination_path);
    }

    public function setMslide2Attribute($value)
    {
        $this->uploadFileToDisk($value, 'mslide2', $this->disk, $this->destination_path);
    }

    public function setMslide3Attribute($value)
    {
        $this->uploadFileToDisk($value, 'mslide3', $this->disk, $this->destination_path);
    }
}
