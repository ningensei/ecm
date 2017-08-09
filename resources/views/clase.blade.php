@extends('layout')

@section('content')
	<header class="page-header">

		<?= $breadcrumbs; ?>
		
	    <div class="background-image-holder parallax-background">
	        <img class="background-image" alt="Background Image" src="{{ asset('img/hero6.jpg') }}">
	    </div>
	    
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-12">
	                <span class="text-white alt-font">CLASES INDIVIDUALES</span>
	                <h1 class="text-white">Piano y teclado</h1>
	                <p class="text-white lead">Las clases de piano en la ECM están dirigidas a niños, adolescentes y adultos con o sin experiencia. Las clases son personalizadas y se adaptan a los conocimientos previos de los alumnos.</p>
	            </div>
	        </div>
	    </div>
	</header>

	<section class="expanding-list">

	    <div class="background-image-holder parallax-background">
	        <img class="background-image" alt="Background Image" src="{{ asset('images/individuales/background.jpg') }}">
	    </div>

	    <div class="container">
	        
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
	                <ul class="expanding-ul">
	                    <li>
	                        <div class="title">
	                            <i class="icon-info"></i>
	                            <span>Información general</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>
	                                Se tiene en cuenta el interés particular de cada alumno (estilo y repertorio) como también sus objetivos. En las clases implementamos el método para piano de la Berklee College of Music, además de otras métodos de enseñanza Las clases apuntan tanto a aquellos que quieran aprender piano como una actividad recreativa como a aquellos que buscan una formación profesional. Ofrecemos la posibilidad de prepararse para exámenes de ingreso a conservatorios y distintas instituciones. Además de clases particulares de piano los alumnos están invitados a participar de distintos ensambles y presentaciones en vivo para enriquecer la experiencia musical y poder compartir junto a otros músicos.

	                            </p>
	                        </div>
	                    </li>
	                    
	                    <li>
	                        <div class="title">
	                            <i class="icon-trophy"></i>
	                            <span>Objetivos</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>
	                                Lograr que el alumno lea y escriba música; y pueda interpretarla. Desarrollar su creatividad y un estilo propio. Lograr que el alumno se pueda desenvolver tocando en grupo, adaptándose y aportando su identidad musical propia. 

	                            </p>
	                        </div>
	                    </li>
	                    
	                    <li>
	                        <div class="title">
	                            <i class="icon-graduation"></i>
	                            <span>Plan de estudios</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>
	                                Las clases de piano se sostienen en estas tres columnas de conocimiento:
	                                <br><br>
	                                1- Lectura e interpretación de partituras. ( Método para lectura de partituras )<br>
	                                2- Técnica: Conciencia corporal para el mejor rendimiento en la interpretación.<br>
	                                3- Armonía clásica y popular, teoría musical, composición e improvisación. (Compresión del Sistema de cifrado. Disposición - Voicings)
	                            </p>
	                        </div>
	                    </li>
	                    
	                    <li>
	                        <div class="title">
	                            <i class="icon-book-open"></i>
	                            <span>Contenidos teóricos</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>
	                                - Comprensión y práctica de acordes <br>
	                                - Escalas para la improvisación, herramientas melódicas. <br>
	                                - Desarrollo del oído armónico <br>
	                                - Compresión del Sistema de cifrado. Disposición (voicings) <br>
	                                - Relación melodía-armonía en cualquier composición o transcripción de un solo de jazz. Así, iremos adquiriendo "criterio musical" para poder aplicar los conceptos extraídos en nuestras propias improvisaciones o composiciones. La idea no es simplemente copiar sino, imitar-asimilar-comprender y evolucionar. <br>
	                                - Las escalas antiguas <br>
	                                - Escala disminuida simétrica. Los arpegios. <br>
	                                - Distintos roles que permite el instrumento (haciendo acompañamiento rítmico y/o armónico, como voz líder, haciendo la melodía o una contramelodía)

	                            </p>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</section>
@stop