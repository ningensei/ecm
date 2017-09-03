<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;
use App\Cursos;
use App\Clases;
use Jenssegers\Agent\Agent;


class FrontController extends Controller
{
    public function __construct() {
        # detect device
        $agent = new Agent();
        
        $this->mobile = $agent->isMobile();
        $this->data['mobile'] = $agent->isMobile();

        $this->data['current'] = false; // default
        
        $this->data['configuracion'] = Configuracion::find(1);
        $this->data['cursos'] = Cursos::get();
        $this->data['clases'] = Clases::get();
    }

    public $data = [];
    
}
