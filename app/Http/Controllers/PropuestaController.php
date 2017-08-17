<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropuestaController extends FrontController
{

    public function index()
    {
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Propuesta' => false
        ));
        
    	return view('propuesta', $this->data);
    }
}
