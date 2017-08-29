<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios;

class ServiciosController extends FrontController
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
        $this->data['servicios'] = Servicios::get();
        
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Servicios' => false
        ));
        
    	return view('servicios', $this->data);
    }
}
