<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Cursos;
use App\Clases;

class FrontController extends Controller
{
    public function __construct() {
        $this->data['configuracion'] = Configuracion::find(1);
        $this->data['cursos'] = Cursos::get();
        $this->data['clases'] = Clases::get();
    }

    public $data = [];
    
}
