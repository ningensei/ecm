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

        $this->crud->setColumns(['titulo', 'imagen']);

        // ----- FIELDS

        
        $this->crud->addField([
            'type' => 'text',
            'name' => 'titulo',
            'label' => "Título"
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