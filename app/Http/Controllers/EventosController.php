<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends FrontController
{

    public function index()
    {
    	return view('eventos');
    }
}
