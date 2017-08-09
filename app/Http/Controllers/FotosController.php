<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotosController extends Controller
{
    public function __construct() {

        $this->breadcrumbs = breadcrumbs(array(
            'Home' => url('/'),
            'Fotos' => false
        ));
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;

    	return view('fotos', compact('breadcrumbs'));
    }
}
