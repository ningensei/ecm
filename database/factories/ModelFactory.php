<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Empleados::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre'         => $faker->name,
        'genero'         => rand(0, 1) ? 'M': 'F',
        'resena'         => $faker->text($maxNbChars = 150),
        'edad'           => rand(18, 50),
        'telefono'       => $faker->e164PhoneNumber,
        'email'          => $faker->email,
        'dni'            => rand(10000000, 40000000),
        'puesto_id'      => rand(1, 19),
        'habilidades'    => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'disponibilidad' => $faker->sentence($nbWords = 3, $variableNbWords = true)
    ];
});

$factory->define(App\Empleadores::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre'         => $faker->company,
        'cuit'           => '20-'.rand(10000000, 40000000).'-'.rand(0, 9),
        'direccion'      => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'resena'         => $faker->text($maxNbChars = 150),
        'edad'           => rand(18, 50),
        'telefono'       => $faker->e164PhoneNumber,
        'contacto'       => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'email'          => $faker->email,
        'puesto_id'      => rand(1, 19),
        'habilidades'    => $faker->sentence($nbWords = 6, $variableNbWords = true), 
        'experiencia'    => $faker->sentence($nbWords = 6, $variableNbWords = true), 
        'remuneracion'   => rand(5000, 20000),
        'disponibilidad' => $faker->sentence($nbWords = 3, $variableNbWords = true)
    ];
});

$factory->define(App\Visitas::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'ip'           => rand(1, 255).'.'.rand(1, 255).'.'.rand(1, 255).'.'.rand(1, 255),
        'empleado_id'  => rand(1, 100),
        'empleador_id' => rand(1, 100)
    ];
});


