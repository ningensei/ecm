<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\CitasCrudRequest as StoreRequest;
use App\Http\Requests\CitasCrudRequest as UpdateRequest;

class CitasCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Citas");
        $this->crud->setRoute("admin/citas");
        $this->crud->setEntityNameStrings('cita', 'citas');

        $this->crud->setColumns(['texto', 'autor', 'edad']);

        // ----- FIELDS

        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'texto',
            'label' => "Texto"
        ]);
        
        $this->crud->addField([
            'type' => 'text',
            'name' => 'autor',
            'label' => 'Autor'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'edad',
            'label' => 'Edad'
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