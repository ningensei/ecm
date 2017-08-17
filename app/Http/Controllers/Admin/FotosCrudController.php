<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\FotosCrudRequest as StoreRequest;
use App\Http\Requests\FotosCrudRequest as UpdateRequest;

class FotosCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Fotos");
        $this->crud->setRoute("admin/fotos");
        $this->crud->setEntityNameStrings('foto', 'fotos');

        $this->crud->setColumns(['titulo', 'imagen', 'ratio']);

        // ----- FIELDS

        
        $this->crud->addField([
            'type' => 'text',
            'name' => 'titulo',
            'label' => "Título"
        ]);
        
        $this->crud->addField([
            'name' => 'imagen',
            'label' => 'Imagen',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'name' => 'ratio',
            'label' => "Razón (ancho x alto)",
            'type' => 'select_from_array',
            'options' => ['1-1' => '1-1', '2-1' => '2-1'],
            'allows_null' => false,
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