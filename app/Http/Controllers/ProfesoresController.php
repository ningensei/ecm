<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresController extends FrontController
{

    public function index()
    {
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Profesores' => false
        ));
        
    	return view('profesores', $this->data);
    }
}
