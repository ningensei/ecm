<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function __construct() {

        $this->breadcrumbs = breadcrumbs(array(
            'Home' => url('/'),
            'Contacto' => false
        ));
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
    	return view('contacto', compact('breadcrumbs'));
    }
}
