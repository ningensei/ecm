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

        $this->data['seo_title'] = $curso->seo_title ? $curso->seo_title : $this->data['seo_title'];

        $this->data['seo_description'] = $curso->seo_description ? $curso->seo_description : $this->data['seo_description'];
        
        $this->data['seo_keywords'] = $curso->seo_keywords ? $curso->seo_keywords : $this->data['seo_description'];

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
