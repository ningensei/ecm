<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propuesta;

class PropuestaController extends FrontController
{

    public function index()
    {
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Propuesta' => false
        ));
        
        $propuesta = Propuesta::find(1);
        $this->data['propuesta'] = $propuesta;

        $this->data['seo_title'] = $propuesta->seo_title ? $propuesta->seo_title : $this->data['seo_title'];

        $this->data['seo_description'] = $propuesta->seo_description ? $propuesta->seo_description : $this->data['seo_description'];
        
        $this->data['seo_keywords'] = $propuesta->seo_keywords ? $propuesta->seo_keywords : $this->data['seo_description'];
        
    	return view('propuesta', $this->data);
    }
}
