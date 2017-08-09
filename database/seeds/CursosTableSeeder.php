<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder {
    
    public function run()
    {   
        $cursos = [
            array(
                'titulo' => 'Lenguaje Musical',
                'descripcion' => 'Las clases de lenguaje musical en la ECM están dirigidas a niños, adolescentes y adultos que quieran profundizar en la parte teórica de la música. El curso de lenguaje musical puede ser individual o grupal, dependiendo del nivel y horarios disponibles del alumno. Es un buen complemento para aquellos que toman clases de instrumento o de canto.  Las clases son personalizadas y se adaptan a los conocimientos previos de los alumnos.',
                'objetivos' => 'Acercarse a la lecto-escritura a través de la percepción
                                <br>Relacionar lo ya conocido y percibido con el lenguaje musical',
                'plan_estudio' => ' El curso consiste de tres áreas: teoría, práctica rítmica y entrenamiento auditivo.
                                    <br>En la parte teórica se enseñarán conceptos fundamentales de armonía: tipos de acorde, intervalos, tonalidad mayor y menor, armonía funcional, armonía modal, etc. Además, se analizarán canciones de diversos estilos de música. 
                                    <br>En la parte rítmica cada alumno tendrá la posibilidad de tocar instrumentos percusivos y aplicarlos en distintos estilos. También se presentarán ejemplos para acompañar e improvisar, y afianzar la sensación rítmica de cada músico. 
                                    <br>En la parte auditiva se entrenará el oído del músico para poder reconocer acordes e intervalos y así poder aprender canciones sacándolas “de oído”.'
            ),

            array(
                'titulo' => 'Producción musical',
                'descripcion' => '  Es un espacio cuyo objetivo es dar a conocer los usos y configuraciones de software de grabación y edición musical para PC y Mac..
                                    Dirigido a músicos y no músicos que estén interesados en complementar su formación para desarrollar producciones independientes. No Hace falta conocimiento previo.',
                'objetivos' => 'El alumno en poco tiempo será capaz de realizar sus grabaciones y producciones musicales con un amplio abanico de posibilidades. Este curso abarca cuestiones tanto técnicas como artísticas.',
                'plan_estudio' => 'Se harán grabaciones en vivo de los alumnos y profesores de la ECM para trabajar la mezcla y otras técnicas.'
            ),

            array(
                'titulo' => 'Curso intensivo de ritmo',
                'descripcion' => 'El curso está orientado a músicos que quieran profundizar la utilización del ritmo como herramienta para enriquecer sus composiciones e interpretaciones. Se  trabajará la coordinación y el uso de ritmos complejos en la improvisación, interpretación y/o composición.',
                'objetivos' => 'Aumentar la precisión y creatividad rítmica 
                                <br>Fortalecer el entendimiento del compás mediante ejercicios puntuales. 
                                <br>Tomar conciencia del pulso y el ritmo.
                                <br>Encontrar, entender y descubrir figuras rítmicas simples y complejas, subdivisiones, silencios.',
                'plan_estudio' => ' Lectura e interpretación de ritmos en 4/4 y 3/4 (negras, corcheas, semicorcheas y tresillos)
                                    <br>Contratiempos
                                    <br>Subdivisión binaria y ternaria
                                    <br>Desplazamientos
                                    <br>Superposiciones métricas
                                    <br>Audio-perceptiva rítmico
                                    <br>Desarrollo de composiciones propias mediante los conocimientos adquiridos.'
            ),

            array(
                'titulo' => 'Composición y armonía',
                'descripcion' => 'Comprensión y práctica de los acordes de jazz y conducción de las voces internas.
                                <br>Escalas para la improvisación, herramientas melódicas.
                                <br>Desarrollar el oído armónico , aquel que es capaz de distinguir las sonoridades, colores, sensaciones o texturas que aporta un acorde, tanto por si mismo (acordes sueltos), como dentro de un contexto tonal (progresiones de acordes en una tonalidad)
                                <br>Sistema de cifrado. Disposición (voicings)',
                'objetivos' => 'Ser capaz de analizar y entender siempre la relación melodía-armonía en cualquier composición o transcripción de un solo de jazz. Así, iremos adquiriendo "criterio musical" para poder aplicar los conceptos extraídos en nuestras propias improvisaciones o composiciones. La idea no es simplemente copiar sino, imitar-asimilar-comprender y evolucionar.
                                <br>La melodía y los adornos de la melodía como inicio del lenguaje improvisado.',                                
                'plan_estudio' => 'Adornos rítmicos: expandir y contraer los valores, repetir notas, anticipar y retardar notas, desplazar grupos de notas, sincopar. Adornos melódicos: cromáticos y diatónicos, notas de paso, bordaduras, aproximaciones no preparadas, resolución retardada.
                                    <br>Las escalas antiguas: Jónica o Mayor, dórica,frigia, lidia, mixolidia, eólica, locria.
                                    <br>Escala disminuida simétrica. Los arpegios.
                                    <br>Complejidad armónica: giros y cadencias típicas del estilo. Enlaces de II-V, rearmonizaciones.'
            ),

            array(
                'titulo' => 'Ensambles',
                            'descripcion' => '-Ensambles fijos: Requieren ya tener conocimiento del instrumento y de lectura musical
                                              <br>-Ensamble de voces: Lunes 20:30hs. Propuesta para cantantes
                                              <br>-Ensamble de rock: Viernes 20hs Abierta la inscripción para canto, piano, guitarra, violín, saxo, clarinete, percusión',
                'objetivos' => '',
                'plan_estudio' => ''
            ),

        ];

        foreach($cursos as $curso):

            DB::table('cursos')->insert([
                'titulo' => $curso['titulo'],
                'descripcion' => $curso['descripcion'],
                'objetivos' => $curso['objetivos'],
                'plan_estudio' => $curso['plan_estudio']
            ]);

        endforeach;
    }   
}