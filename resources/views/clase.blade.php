@extends('layout')

@section('content')
	<header class="page-header">

		<?= $breadcrumbs; ?>
		
		@if(Storage::disk('public')->exists($clase->imginterna))
	    <div class="background-image-holder parallax-background">
	    		<img class="background-image" alt="Background Image" src="{{ url('imagecache/extralarge/'.basename($clase->imginterna)) }}">
	    </div>
	    @endif
	    
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-12 text-white">
	                <span class="text-white alt-font">CLASES INDIVIDUALES</span>
	                <h1 class="text-white">{{ $clase->titulo }}</h1>
	                <p class="text-white lead">{!! $clase->descripcion !!}</p>
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
	                	@if($clase->info_gral)
	                	<li>
	                        <div class="title">
	                            <i class="icon-info"></i>
	                            <span>Información general</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>{!! $clase->info_gral !!}</p>
	                        </div>
	                    </li>
	                	@endif

	                	@if($clase->objetivos)
	                	<li>
	                        <div class="title">
	                            <i class="icon-trophy"></i>
	                            <span>Objetivos</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>{!! $clase->objetivos !!}</p>
	                        </div>
	                    </li>
	                	@endif

	                    @if($clase->plan_estudio)
	                	<li>
	                        <div class="title">
	                            <i class="icon-graduation"></i>
	                            <span>Plan de estudios</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>{!! $clase->plan_estudio !!}</p>
	                        </div>
	                    </li>
	                	@endif
	                    
	                	@if($clase->contenidos_teoricos)
	                	<li>
	                        <div class="title">
	                            <i class="icon-book-open"></i>
	                            <span>Contenidos teóricos</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>{!! $clase->contenidos_teoricos !!}</p>
	                        </div>
	                    </li>
	                	@endif

	                	@if($clase->modalidad)
	                	<li>
	                        <div class="title">
	                            <i class="icon-list"></i>
	                            <span>Modalidad</span>
	                        </div>
	                        
	                        <div class="text-content">
	                            <p>{!! $clase->modalidad !!}</p>
	                        </div>
	                    </li>
	                	@endif
	                    
	                    
	                </ul>
	            </div>
	        </div>
	    </div>
	</section>
@stop