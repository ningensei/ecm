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
        $this->data['noticias'] = Noticias::take(3)->get();
        $this->data['clases_home'] = $clases = Clases::take(4)->inRandomOrder()->whereNotNull('imghome')->get();
        $this->data['citas'] = $citas = Citas::take(3)->get();
        
    	return view('home', $this->data);
    }
}
