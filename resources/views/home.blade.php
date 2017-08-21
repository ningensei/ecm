@extends('layout')

@section('content')

	<section class="duplicatable-content">
		<div class="container">
			<div class="row">
				@foreach( $noticias as $noticia )
				<div class="col-sm-4">
					<div class="feature">
						<h5 class="brown">{{ $noticia->titulo }}</h5>
						<p>
							{!! $noticia->descripcion !!}
						</p>
					</div>
				</div><!--end 4 col-->
				@endforeach
			
			</div><!--end of row-->
		</div>
	</section>

	<section class="hero-slider">
		<ul class="slides">
			<li class="overlay">
				<div class="background-image-holder parallax-background">
					<img alt="Background Image" src="img/hero4.jpg">
				</div>
				
				<div class="video-wrapper">
					<video autoplay="" muted="" loop="">
						<!-- <source src="video/video.webm" type="video/webm"> -->
						<source src="video/video_.mp4" type="video/mp4">
						<!-- <source src="video/video.ogv" type="video/ogg">	 -->
					</video>
				</div>
					
				<div class="container align-vertical">
					<div class="row">
						<div class="col-sm-9 col-md-8">
							<h1 class="text-white">Llamanos al {{ $configuracion->telefono }}</h1>
							<a href="#" class="btn btn-primary btn-white">O consultanos aquí</a>
						</div>
					</div>
				</div><!--end of container-->
			</li><!--end of individual slide-->
			
			<!--end of individual slide-->

		</ul>
	</section>
	
	<section class="duplicatable-content">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="brown">CLASES INDIVIDUALES</h1>
				</div>
			</div><!--end of row-->

			<div class="row">

				@foreach($clases_home as $clase)
					@if(Storage::disk('public')->exists($clase->imghome))
						<div class="col-md-3 col-sm-6">

							<div class="feature feature-icon-large">

								
									<img src="{{asset('storage/'.$clase->imghome)}}" class="icon-instrument" alt="{{ $clase->titulo }}"/>
								
								<h5><a class="brown" href="{{ URL::to('clases/ver/'.$clase->id) }}">{{$clase->titulo}}</a></h5>
								<p>
									{!! $clase->descripcion_home !!}
								</p>
							</div>
						</div><!--end 3 col-->
					@endif
				@endforeach
			
			</div><!--end of row-->
		</div>

	</section>

	<section class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="testimonials-slider text-center">
						<ul class="slides">
							@foreach($citas as $cita)
								<li>
									<p class="text-white lead">{{ $cita->texto }}</p>
									<span class="author text-white">{{ $cita->autor.' - '.$cita->edad }}</span>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>
@stop