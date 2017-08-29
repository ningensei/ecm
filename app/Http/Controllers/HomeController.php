<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use App\Noticias;
use App\Clases;
use App\Citas;
use App\Home;

class HomeController extends FrontController
{

    public function __construct()
    {
        $this->data['js'] = array(
            'imagesloaded.pkgd.min.js',
            'masonry.pkgd.min.js'
        );
        parent::__construct();
    }


    public function index() 
    {
        $this->data['current'] = 'home';

        $this->data['slides_home'] = $this->getHomeSlides();

        $this->data['clases_home'] = $clases = Clases::inRandomOrder()->whereNotNull('imghome')->get();

        $this->data['noticias'] = Noticias::take(3)->get();
        
        $this->data['citas'] = $citas = Citas::take(3)->get();
        
    	return view('home', $this->data);
    }


    private function getHomeSlides()
    {
        $home = Home::find(1);
        $slides_home = array();

        if($home->slider1) {
            $slides_home[] = array(
                'imagen' => $home->slider1,
                'texto'  => $home->texto_slide1

            );
        }

        if($home->slider2) {
            $slides_home[] = array(
                'imagen' => $home->slider2,
                'texto'  => $home->texto_slide2
            );
        }

        if($home->slider3) {
            $slides_home[] = array(
                'imagen' => $home->slider3,
                'texto'  => $home->texto_slide3
            );
        }

        return $slides_home;
    }
}
