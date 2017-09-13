@extends('layout')

@section('content')

	<section class="hero-slider">
		<ul class="slides">
			@foreach($slides_home as $slide)

				@if(Storage::disk('public')->exists($slide['imagen']))
				<li class="overlay">
					<div class="background-image-holder parallax-background">
						@if($mobile)
						<img class="background-image" alt="Background Image" src="{{ url('imagecache/slidermobile/'.basename($slide['imagen'])) }}">
						@else
						<img class="background-image" alt="Background Image" src="{{ url('imagecache/extralarge/'.basename($slide['imagen'])) }}">
						@endif
					</div>
					
					<div class="container align-vertical">
						<div class="row">
							<div class="col-md-6 col-sm-9">
								<h1 class="text-white">{{ $slide['texto'] }}</h1>
								<a href="{{URL::to('contacto')}}" class="btn btn-primary btn-white">Contactate</a>
							</div>
						</div>
					</div><!--end of container-->
				</li><!--end of individual slide-->
				
				<!--end of individual slide-->
				@endif

			@endforeach

		</ul>
	</section>
	

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

	@if(Storage::disk('public')->exists($video))
	<section class="video-content">
	            
	            <div class="videowrapper">
	                <video autoplay="" muted="" loop="">
	                    <source src="{{ asset('storage/'.$video) }}" type="video/mp4">
	                </video>
	            </div>
	                
	            <div class="container align-vertical video-description">
	                <div class="row">
	                    <div class="col-xs-12 description-content">
	                        <h1 class="text-white">Llamanos al {{ $configuracion->telefono }}</h1>
	                        <a href="#" class="btn btn-primary btn-white">O consultanos aquí</a>
	                    </div>
	                </div>
	            </div><!--end of container-->
	</section>
	@endif

	<section class="duplicatable-content">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="brown">CLASES INDIVIDUALES</h1>
				</div>
			</div><!--end of row-->

			<div class="row grid">

				@foreach($clases_home as $clase)
					@if(Storage::disk('public')->exists($clase->imghome))
						<div class="col-md-2 col-xs-6 col-sm-4 item icono-clase">

							<div class="feature feature-icon-large text-center">

								<a class="brown" href="{{ URL::to('clases/ver/'.$clase->id).'-'.makeSlugs($clase->titulo) }}">
									<img src="{{ url('imagecache/clasesicons/'.basename($clase->imghome)) }}" class="icon-instrument" alt="{{ $clase->titulo }}"/>
								</a>
								<p>{{ $clase->titulo }}</p>
								
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