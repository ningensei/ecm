<?php

use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder {
    
    public function run()
    {   
        $noticias = [
            array(
                'titulo' => 'Abierta la inscripción 2017',
                'descripcion' => 'Formación instrumental y vocal -(Reserva tu cupo)',
            ),
            array(
                'titulo' => 'Ensambles ECM',
                'descripcion' => '- Jazz y blues (Dir. Sergio Cisneros)
                                    <br>(Bronces)
                                    <br>Lunes 20:30 hs.
                                    <br>
                                    <br>-Ensamble de Rock (Dir. Tomas Di Maria)
                                    <br>Viernes 20 hs. 
                                    <br>Vacantes Limitadas - Contacto',
            ),
            array(
                'titulo' => 'Guitarra para chicos',
                'descripcion' => 'Un curso destinado a chicos que quieran dar los primeros pasos con la guitarra, son clases grupales.',
            ),
        ];

        foreach($noticias as $noticia):

            DB::table('noticias')->insert([
                'titulo' => $noticia['titulo'],
                'descripcion' => $noticia['descripcion'],
            ]);

        endforeach;
    }   
}