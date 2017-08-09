@extends('layout')

@section('content')
<section class="pure-text-centered">
    <?=$breadcrumbs;?>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                <span class="sub alt-font">CURSOS</span>
                <h1 class="brown"><strong>Lenguaje Musical</strong></h1>
                <p class="lead">
                    Las clases de lenguaje musical en la ECM están dirigidas a ninnos, adolescentes y adultos que quieran profundizar en la parte teórica de la música. El curso de lenguaje musical puede ser individual o grupal, dependiendo del nivel y horarios disponibles del alumno. Es un buen complemento para aquellos que toman clases de instrumento o canto. Las clases son personalizadas y se adaptana losconocimientos de los alumnos
                </p>
            </div>
        </div>

    </div>
</section>

<section class="expanding-list">

    <div class="background-image-holder parallax-background">
        <img class="background-image" alt="Background Image" src="images/individuales/background.jpg">
    </div>

    <div class="container">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <ul class="expanding-ul">
                    
                    </li>
                    
                    <li>
                        <div class="title">
                            <i class="icon-trophy"></i>
                            <span>Objetivos</span>
                        </div>
                        
                        <div class="text-content text-justify">
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
                        
                        <div class="text-content text-justify">
                            <p>
                                El curso consiste de tres áreas: teoría, práctica rítmica y entrenamiento auditivo.
                                En la parte teórica se enseñarán conceptos fundamentales de armonía: tipos de acorde, intervalos, tonalidad mayor y menor, armonía funcional, armonía modal, etc. Además, se analizarán canciones de diversos estilos de música. <br>
                                En la parte rítmica cada alumno tendrá la posibilidad de tocar instrumentos percusivos y aplicarlos en distintos estilos. También se presentarán ejemplos para acompañar e improvisar, y afianzar la sensación rítmica de cada músico. <br>
                                En la parte auditiva se entrenará el oído del músico para poder reconocer acordes e intervalos y así poder aprender canciones sacándolas “de oído”.

                            </p>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
@stop