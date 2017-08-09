<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use App\Noticias;
use App\Clases;
use App\Citas;

class HomeController extends FrontController
{

    public function index() 
    {
        print_r($this->getConfiguracion());
        die();
        $noticias = Clases::take(3)->get();
        $clases = Clases::take(4)->get();
        $citas = Clases::take(3)->get();

    	return view('home', compact('noticias', 'clases', 'citas'));
    }
}
