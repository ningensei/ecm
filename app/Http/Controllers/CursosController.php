<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

    public function ver($id)
    {
        $name = 'Lenguaje Musical';

        $breadcrumbs = breadcrumbs(array(
            'Home' => url('/'),
            'Cursos' => false,
            $name => false
        ));

    	return view('curso', compact('breadcrumbs'));
    }
}
