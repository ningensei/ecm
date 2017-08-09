<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\VideosCrudRequest as StoreRequest;
use App\Http\Requests\VideosCrudRequest as UpdateRequest;

class VideosCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Videos");
        $this->crud->setRoute("admin/videos");
        $this->crud->setEntityNameStrings('video', 'videos');

        $this->crud->setColumns(['titulo', 'descripcion', 'url']);

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

        $this->crud->addField([
            'type' => 'text',
            'name' => 'url',
            'label' => 'URL Video (youtube)'
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