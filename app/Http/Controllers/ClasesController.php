<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases;

class ClasesController extends FrontController
{
    public function __construct() {
        $this->data['current'] = 'clases';
        parent::__construct();
    }

    public function ver($slug)
    {
        $id = explode('-', $slug)[0];
        
        $clase = Clases::find($id);

        $this->data['seo_title'] = $clase->seo_title ? $clase->seo_title : $this->data['seo_title'];

        $this->data['seo_description'] = $clase->seo_description ? $clase->seo_description : $this->data['seo_description'];
        
        $this->data['seo_keywords'] = $clase->seo_keywords ? $clase->seo_keywords : $this->data['seo_description'];

        $this->data['clase'] = $clase;

        $name = $clase->titulo;
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Clases' => false,
            $name => false
        ));
        
        return view('clase', $this->data);
    }
}
