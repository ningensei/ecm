<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Name of route
    |--------------------------------------------------------------------------
    |
    | Enter the routes name to enable dynamic imagecache manipulation.
    | This handle will define the first part of the URI:
    | 
    | {route}/{template}/{filename}
    | 
    | Examples: "images", "img/cache"
    |
    */
   
    'route' => 'imagecache',

    /*
    |--------------------------------------------------------------------------
    | Storage paths
    |--------------------------------------------------------------------------
    |
    | The following paths will be searched for the image filename, submited 
    | by URI. 
    | 
    | Define as many directories as you like.
    |
    */
    
    'paths' => array(
        'storage/uploads/home',
        'storage/uploads/fotos',
        'storage/uploads/clases',
        'storage/uploads/profesores',
        'storage/uploads/propuesta',
        'storage/uploads/servicios',
        public_path('upload'),
        public_path('images')
    ),

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation filter templates.
    | The keys of this array will define which templates 
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    | The values of this array will define which filter class
    | will be applied, by its fully qualified name.
    |
    */
   
    'templates' => array(
        'small'        => 'Intervention\Image\Templates\Small',
        'medium'       => 'Intervention\Image\Templates\Medium',
        'large'        => 'Intervention\Image\Templates\Large',
        'extralarge'   => 'App\Filters\extraLarge',
        'slidermobile' => 'App\Filters\sliderMobile',
        'clasesicons'  => 'App\Filters\clasesIcons',
        'largeimage'   => 'App\Filters\largeImage',
        'squareimage'  => 'App\Filters\squareImage',
    ),

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
    */
   
    'lifetime' => 43200,

);
