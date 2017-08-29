@extends('layout')

@section('content')
<section class="pure-text-centered curso">
    <?=$breadcrumbs;?>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                <span class="sub alt-font">CURSOS</span>
                <h1><strong>{!! $curso->titulo !!}</strong></h1>
                <p class="lead">{!! $curso->descripcion !!}</p>
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
                    
                    @if($curso->objetivos)
                    <li>
                        <div class="title">
                            <i class="icon-trophy"></i>
                            <span>Objetivos</span>
                        </div>
                        
                        <div class="text-content text-center">
                            <p>{!! $curso->objetivos !!}</p>
                        </div>
                    </li>
                    @endif

                    @if($curso->plan_estudio)
                    <li>
                        <div class="title">
                            <i class="icon-graduation"></i>
                            <span>Plan de estudios</span>
                        </div>
                        
                        <div class="text-content text-center">
                            <p>{!! $curso->plan_estudio !!}</p>
                        </div>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </div>
</section>
@stop