<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\NoticiasCrudRequest as StoreRequest;
use App\Http\Requests\NoticiasCrudRequest as UpdateRequest;

class NoticiasCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Noticias");
        $this->crud->setRoute("admin/noticias");
        $this->crud->setEntityNameStrings('noticia', 'noticias');

        $this->crud->setColumns(['titulo', 'descripcion']);

        // ----- FIELDS
        
        $this->crud->addField([
            'type' => 'text',
            'name' => 'titulo',
            'label' => "Título"
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'descripcion',
            'label' => 'Descripción'
        ]);


    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}