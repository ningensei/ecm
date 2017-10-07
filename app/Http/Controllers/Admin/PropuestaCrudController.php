<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\PropuestaCrudRequest as StoreRequest;
use App\Http\Requests\PropuestaCrudRequest as UpdateRequest;
use App\Propuesta;

class PropuestaCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Propuesta");
        $this->crud->setRoute("admin/propuesta");
        $this->crud->setEntityNameStrings('propuesta', 'Propuesta');

        // ----- FIELDS

        $this->crud->addField([
            'type' => 'text',
            'name' => 'seo_title',
            'label' => 'SEO Título'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'seo_description',
            'label' => 'SEO Descripción'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'seo_keywords',
            'label' => 'SEO Palabras clave'
        ]);
        
        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'texto_1',
            'label' => 'Primer párrafo'
        ]);

        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'texto_2',
            'label' => 'Segundo párrafo'
        ]);

        $this->crud->addField([
            'type' => 'ckeditor',
            'name' => 'texto_3',
            'label' => 'Tercer párrafo'
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
        $rowCount = Propuesta::count();

        if($rowCount) {
            return redirect('/admin/propuesta/1/edit');

        } else {
            Propuesta::truncate();
            return redirect('/admin/propuesta/create');

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