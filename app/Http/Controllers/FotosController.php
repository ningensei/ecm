<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotos;

class FotosController extends FrontController
{

    public function index()
    {
        $this->data['fotos'] = Fotos::paginate(6);

        $this->data['breadcrumbs'] = breadcrumbs(array(
            'Home' => url('/'),
            'Fotos' => false
        ));


    	return view('fotos', $this->data);
    }
}
