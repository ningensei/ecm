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
        
        $profesores = Profesores::find(1);
        $this->data['profesores'] = $profesores;

        $this->data['seo_title'] = $profesores->seo_title ? $profesores->seo_title : $this->data['seo_title'];

        $this->data['seo_description'] = $profesores->seo_description ? $profesores->seo_description : $this->data['seo_description'];
        
        $this->data['seo_keywords'] = $profesores->seo_keywords ? $profesores->seo_keywords : $this->data['seo_description'];

    	return view('profesores', $this->data);
    }
}