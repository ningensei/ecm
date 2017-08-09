<?php

use Illuminate\Database\Seeder;

class CitasTableSeeder extends Seeder {
	
	public function run()
	{	
		$citas = [
			array(
				'autor' => 'Melina Lopez',
				'edad' => '27',
				'texto' => 'Estoy muy contenta con la escuela porque encontré lo que buscaba, divertirme con algo que me apasiona y aprender. Es un lugar donde hay espacio para todos: adultos, adolescentes y niños. Hay buen ambiente, clima distendido, pero también hay rigurosidad para enseñar.'
			),
			array(
				'autor' => 'Juan Sente',
				'edad' => '18',
				'texto' => 'La escuela es genial. Hay un re lindo ambiente de gente, para tocar en el estilo que a uno más le guste. Los profesores son muy atentos y se adaptan a tus necesidades.'
			),
			array(
				'autor' => 'Oscar Perez',
				'edad' => '56',
				'texto' => 'Esta es la primera vez que aprendo un instrumento, me gusta, la paso bien, y eso es gracias al buen trabajo que hace la gente de la escuela todos los días.'
			),
		];

		foreach($citas as $cita):

			DB::table('citas')->insert([
				'autor' => $cita['autor'],
				'edad' => $cita['edad'],
				'texto' => $cita['texto'],
			]);

		endforeach;
	}	
}