<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder {
    
    public function run()
    {   
        $videos = [
            array(
                'titulo' => 'Muestra Diciembre 2012',
                'descripcion' => 'Muestra Diciembre 2012 - Foro de las Ciencias y las Artes',
                'url' => 'https://www.youtube.com/embed/6tTt8uAwOPQ'
            ),
            array(
                'titulo' => 'Till There Was You',
                'descripcion' => 'Grupo de canto de la ECM',
                'url' => 'https://youtu.be/FPN5askbKYg'
            ),
            array(
                'titulo' => 'Muestra 2012',
                'descripcion' => 'Grupo de percusión, Muestra 2012',
                'url' => 'https://youtu.be/8JntfANuubo'
            ),
            array(
                'titulo' => 'Tan solo',
                'descripcion' => 'Tan solo, grupo de guitarra y grupo de percu',
                'url' => 'https://youtu.be/KgmfMOzyLuQ'
            ),
        ];

        foreach($videos as $video):

            DB::table('videos')->insert([
                'titulo' => $video['titulo'],
                'descripcion' => $video['descripcion'],
                'url' => $video['url']
            ]);

        endforeach;
    }   
}