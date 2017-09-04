<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends FrontController
{

    public function index()
    {
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Contacto' => false
        ));

    	return view('contacto', $this->data);
    }
}
