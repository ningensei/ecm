<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ClasesCrudRequest as StoreRequest;
use App\Http\Requests\ClasesCrudRequest as UpdateRequest;

class ClasesCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Clases");
        $this->crud->setRoute("admin/clases");
        $this->crud->setEntityNameStrings('clase', 'clases');

        $this->crud->setColumns(['titulo', 'descripcion']);

        // ----- FIELDS

        
        $this->crud->addField([
            'type' => 'text',
            'name' => 'titulo',
            'label' => "Título"
        ]);

        $this->crud->addField([
            'name' => 'imginterna',
            'label' => 'Imagen Interna (1500x500)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'name' => 'imghome',
            'label' => 'Imagen Home (90x90 aprox)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'descripcion',
            'label' => 'Descripción'
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'info_gral',
            'label' => 'Información General'
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'objetivos',
            'label' => 'Objetivos'
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'plan_estudio',
            'label' => 'Plan de estudio'
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'contenidos_teoricos',
            'label' => 'Contenidos Teóricos'
        ]);

        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'modalidad',
            'label' => 'Modalidad'
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