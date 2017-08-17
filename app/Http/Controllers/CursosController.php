<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;

class CursosController extends FrontController
{

    public function ver($slug)
    {
        $id = explode('-', $slug)[0];

        $curso = Cursos::find($id);
        $this->data['curso'] = $curso;
        
        $name = $curso->titulo;

        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Cursos' => false,
            $name => false
        ));

    	return view('curso', $this->data);
    }
}
