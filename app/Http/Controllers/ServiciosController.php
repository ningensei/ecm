<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function __construct() {

        $this->breadcrumbs = breadcrumbs(array(
            'Home' => url('/'),
            'Servicios' => false
        ));
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
    	return view('servicios', compact('breadcrumbs'));
    }
}
