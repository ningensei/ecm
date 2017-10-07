<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ConfiguracionCrudRequest as StoreRequest;
use App\Http\Requests\ConfiguracionCrudRequest as UpdateRequest;

class ConfiguracionCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Configuracion");
        $this->crud->setRoute("admin/configuracion");
        $this->crud->setEntityNameStrings('configuracion', 'Configuración');

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
            'name' => 'texto_contacto',
            'label' => "Texto formulario de contacto"
        ]);
        
        $this->crud->addField([
            'type' => 'text',
            'name' => 'direccion',
            'label' => 'Dirección'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'email',
            'label' => 'Email'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'telefono',
            'label' => 'Teléfono'
        ]);

        $this->crud->addField([
            'name' => 'favicon',
            'label' => 'Favicon',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

    }

    public function index()
    {
        return redirect('/admin/configuracion/1/edit');
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