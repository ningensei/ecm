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

    public function test()
    {
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Contacto' => false
        ));

        return view('contacto_test', $this->data);
    }

    public function google()
    {
        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Contacto' => false
        ));

        return view('google', $this->data);
    }
}
