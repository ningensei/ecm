<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesores;

class ProfesoresController extends FrontController
{

    public function index()
    {
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Profesores' => false
        ));
        
        $this->data['profesores'] = Profesores::find(1);

    	return view('profesores', $this->data);
    }
}