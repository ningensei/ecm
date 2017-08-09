<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Empleados;
use App\Empleadores;
use App\Visitas;


class DashboardController extends Controller
{
    public function index()
    {
        $current = 'dashboard';
        

        return view('vendor.backpack.base.dashboard');
    }
}