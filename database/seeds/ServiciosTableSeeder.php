<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder {
    
    public function run()
    {   
        $servicios = [
            array(
                'titulo' => 'Clases a domicilio',
                'descripcion' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.'
            ),
            array(
                'titulo' => 'Clases a distancia',
                'descripcion' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.'
            ),
            array(
                'titulo' => 'Preparación para exámenes e ingresos',
                'descripcion' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.'
            ),
            array(
                'titulo' => 'Asesoramiento para compra de instrumentos',
                'descripcion' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.'
            ),
            array(
                'titulo' => 'Talleres para empresas e instituciones',
                'descripcion' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.'
            ),
            array(
                'titulo' => 'Conciertos didácticos',
                'descripcion' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.'
            ),
            array(
                'titulo' => 'Música para eventos',
                'descripcion' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.'
            ),
            
        ];

        foreach($servicios as $servicio):

            DB::table('servicios')->insert([
                'titulo' => $servicio['titulo'],
                'descripcion' => $servicio['descripcion'],
            ]);

        endforeach;
    }   
}