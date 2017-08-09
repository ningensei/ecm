<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasesController extends Controller
{
    public function __construct() {
        $this->current = 'clases';
    }

    public function ver($id)
    {
        $name = 'Piano';
        $breadcrumbs = breadcrumbs(array(
            'Home' => url('/'),
            'Clases' => false,
            $name => false
        ));
        
        $current = $this->current;
        return view('clase', compact('current', 'breadcrumbs'));
    }
}
