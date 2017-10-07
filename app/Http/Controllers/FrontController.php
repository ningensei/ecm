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
        $this->data['tablet'] = $agent->isTablet();

        $this->data['current'] = false; // default
        
        $this->data['configuracion'] = Configuracion::find(1);
        $conf = $this->data['configuracion'];

        $this->data['cursos'] = Cursos::get();
        $this->data['clases'] = Clases::get();

        $seo_title = 'Escuela creativa de musica | Zona Norte';
        $seo_description = 'Escuela de música. Todos los instrumentos en Vicente Lopez, Zona Norte';
        $seo_keywords = 'Estudiar piano canto guitarra bajo violin audio clases de musica extracurriculares produccion musical clarinete saxo | Bateria | Percu | Canto | Cello | Violin | Acordeon | Saxo | Clarinete | Flauta | Armonica';

        $this->data['seo_title'] = $conf->seo_title ? $conf->seo_title : $seo_title;
        $this->data['seo_description'] = $conf->seo_description ? $conf->seo_description : $seo_description;
        $this->data['seo_keywords'] = $conf->seo_keywords ? $conf->seo_keywords : $seo_keywords;
    }

    public $data = [];
    
}
