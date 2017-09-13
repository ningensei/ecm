<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\HomeCrudRequest as StoreRequest;
use App\Http\Requests\HomeCrudRequest as UpdateRequest;
use App\Home;

class HomeCrudController extends CrudController {

    public function setup()
    {
        $this->crud->setModel("App\Home");
        $this->crud->setRoute("admin/home");
        $this->crud->setEntityNameStrings('home', 'Home');

        // ----- FIELDS

        $this->crud->addField([
            'name' => 'mp4video',
            'label' => 'Video .mp4',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'name' => 'oggvideo',
            'label' => 'Video .ogv',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'name' => 'webmvideo',
            'label' => 'Video .webm',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);


        # slide 1

        $this->crud->addField([
            'name' => 'slider1',
            'label' => 'Imagen Slider 1 (1440 x 768)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'name' => 'mslide1',
            'label' => 'Imagen Slider 1 (Versión Mobile)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'texto_slide1',
            'label' => 'Texto Slide 1'
        ]);



        # slide 2

        $this->crud->addField([
            'name' => 'slider2',
            'label' => 'Imagen Slider 2 (1440px x 768)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'name' => 'mslide2',
            'label' => 'Imagen Slider 2 (Versión Mobile)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'texto_slide2',
            'label' => 'Texto Slide 2'
        ]);



        # slide 3

        $this->crud->addField([
            'name' => 'slider3',
            'label' => 'Imagen Slider 3 (1440px x 768)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);
        
        $this->crud->addField([
            'name' => 'mslide3',
            'label' => 'Imagen Slider 3 (Versión Mobile)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'public'
        ]);

        $this->crud->addField([
            'type' => 'text',
            'name' => 'texto_slide3',
            'label' => 'Texto Slide 3'
        ]);

    }

    public function index()
    {
        $rowCount = Home::count();

        if($rowCount) {
            return redirect('/admin/home/1/edit');

        } else {
            Home::truncate();
            return redirect('/admin/home/create');

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