<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ServiciosCrudRequest as StoreRequest;
use App\Http\Requests\ServiciosCrudRequest as UpdateRequest;

class ServiciosCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Servicios");
        $this->crud->setRoute("admin/servicios");
        $this->crud->setEntityNameStrings('servicio', 'servicios');

        $this->crud->setColumns(['titulo', 'descripcion', 'imagen']);

        // ----- FIELDS

        $this->crud->addField([
            'type' => 'text',
            'name' => 'titulo',
            'label' => 'Título'
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'descripcion',
            'label' => 'Descripción'
        ]);

        $this->crud->addField([
            'name' => 'imagen',
            'label' => 'Imagen (65x65 aprox)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
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