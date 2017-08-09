<?php

use Illuminate\Database\Seeder;

class ConfiguracionTableSeeder extends Seeder {
    
    public function run()
    {   
        $configuracion = array(
            'texto_contacto' => 'Para reservar tu cupo acercate a la ECM antes del comienzo del curso. Nuestro horario de atención es de lunes a viernes de 16 a 20 hs o sábados de 10 a 15hs. Coordinar entrevista por mail o vía telefónica.',
            'direccion' => 'GRAL. GUEMES 1645, FLORIDA',
            'email' => 'contacto@ecmusica.com',
            'telefono' => '+5411 4781-0620'
        );

        DB::table('configuracion')->insert([
            'texto_contacto' => $configuracion['texto_contacto'],
            'direccion' => $configuracion['direccion'],
            'email' => $configuracion['email'],
            'telefono' => $configuracion['telefono']
        ]);
    }   
}