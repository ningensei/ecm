<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;

class FrontController extends Controller
{
    public function __construct() {
        $this->configuracion = Configuracion::find(1);
    }

    private $configuracion;

    public function getConfiguracion() {
        return $this->configuracion;
    }
    
}
