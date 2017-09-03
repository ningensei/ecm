<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProfesoresCrudRequest as StoreRequest;
use App\Http\Requests\ProfesoresCrudRequest as UpdateRequest;
use App\Profesores;

class ProfesoresCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Profesores");
        $this->crud->setRoute("admin/profesores");
        $this->crud->setEntityNameStrings('profesores', 'Profesores');

        // ----- FIELDS

        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'texto',
            'label' => 'Primer párrafo'
        ]);

        $this->crud->addField([
            'name' => 'imagen',
            'label' => 'Imagen',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

    }

    public function index()
    {
        $rowCount = Profesores::count();

        if($rowCount) {
            return redirect('/admin/profesores/1/edit');

        } else {
            Profesores::truncate();
            return redirect('/admin/profesores/create');

        }
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