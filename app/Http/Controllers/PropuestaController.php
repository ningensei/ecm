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
        
        $this->data['propuesta'] = Propuesta::find(1);
    	return view('propuesta', $this->data);
    }
}
