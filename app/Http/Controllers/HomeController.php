<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use App\Noticias;
use App\Clases;
use App\Citas;
use App\Home;
use Image;
use Storage;

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
        $home = Home::find(1);

        $this->data['current'] = 'home';

        $this->data['video'] = youtubeEmbedUrl($home->video);

        if($this->mobile) {
            
            $this->data['slides_home'] = $this->getMobileSlides($home);
        } else {

            $this->data['slides_home'] = $this->getHomeSlides($home);
        }
        

        $this->data['clases_home'] = $clases = Clases::inRandomOrder()->whereNotNull('imghome')->get();

        $this->data['noticias'] = Noticias::take(3)->get();
        
        $this->data['citas'] = $citas = Citas::take(3)->get();
        
    	return view('home', $this->data);
    }


    private function getHomeSlides($home)
    {
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

    


    private function getMobileSlides($home)
    {
        $slides_home = array();

        if($home->mslide1) {
            $slides_home[] = array(
                'imagen' => $home->mslide1,
                'texto'  => $home->texto_slide1

            );
        }

        if($home->mslide2) {
            $slides_home[] = array(
                'imagen' => $home->mslide2,
                'texto'  => $home->texto_slide2
            );
        }

        if($home->mslide3) {
            $slides_home[] = array(
                'imagen' => $home->mslide3,
                'texto'  => $home->texto_slide3
            );
        }

        return $slides_home;
    }
}
