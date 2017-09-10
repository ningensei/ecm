<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\CursosCrudRequest as StoreRequest;
use App\Http\Requests\CursosCrudRequest as UpdateRequest;

class CursosCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Cursos");
        $this->crud->setRoute("admin/cursos");
        $this->crud->setEntityNameStrings('curso', 'cursos');

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
            'type' => 'ckeditor',
            'name' => 'descripcion',
            'label' => 'Descripción'
        ]);

        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'objetivos',
            'label' => 'Objetivos'
        ]);

        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'plan_estudio',
            'label' => 'Plan de esutudio'
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