<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function __construct() {

        $this->breadcrumbs = breadcrumbs(array(
            'Home' => url('/'),
            'Videos' => false
        ));
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;

    	return view('videos', compact('breadcrumbs'));
    }
}
