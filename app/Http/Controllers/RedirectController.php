<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
use App\Noticias;
use App\Clases;
use App\Citas;
use App\Home;
use Image;
use Storage;

class RedirectController extends FrontController
{
    # Estáticas
    public function home() 
    { 
        return Redirect::to('/');
    }

    public function servicios()
    { 
        return Redirect::to('servicios');
    }
    
    public function contacto()
    { 
        return Redirect::to('contacto'); 
    }

    public function fotos()
    { 
        return Redirect::to('fotos'); 
    }

    public function profesores()
    { 
        return Redirect::to('profesores'); 
    }

    public function propuesta()
    { 
        return Redirect::to('propuesta'); 
    }

    # Dinámicas clases

    public function armonica() 
    {
        return $this->dinamicRedirect('armonica');
    }

    public function acordeon() 
    {
        return $this->dinamicRedirect('acordeon');
    }

    public function bajo() 
    {
        return $this->dinamicRedirect('bajo');
    }

    public function bateria() 
    {
        return $this->dinamicRedirect('bateria');
    }

    public function canto() 
    {
        return $this->dinamicRedirect('canto');
    }

    public function cello() 
    {
        return $this->dinamicRedirect('cello');
    }

    public function clarinete() 
    {
        return $this->dinamicRedirect('clarinete');
    }

    public function flauta() 
    {
        return $this->dinamicRedirect('flauta');
    }

    public function guitarra() 
    {
        return $this->dinamicRedirect('guitarra');
    }

    public function percu() 
    {
        return $this->dinamicRedirect('percu');
    }

    public function piano()
    {
        return $this->dinamicRedirect('piano');
    }

    public function saxo() 
    {
        return $this->dinamicRedirect('saxo');
    }

    public function ukelele() 
    {
        return $this->dinamicRedirect('ukelele');
    }

    public function violin() 
    {
        return $this->dinamicRedirect('violin');
    }




    private function dinamicRedirect($titulo)
    {
        $clase = Clases::where('titulo', 'like', '%'.$titulo.'%')->first();
        
        if($clase) {
            return Redirect::to('/clases/ver/'.$clase->id.'-'.makeSlugs($clase->titulo));

        } else {

            return Redirect::to('/'); 
        }
    }
}
