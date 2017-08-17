@extends('layout')

@section('content')
	<section class="duplicatable-content">

		<?=$breadcrumbs;?>

	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 text-center">
	                <h1>Servicios</h1>
	            </div>
	        </div>

	        <div class="row">

	        	@foreach($servicios as $servicio)
	        	<div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                    	@if(Storage::disk('public')->exists($servicio->imagen))
	                        <img class="service-img" src="{{asset('storage/'.$servicio->imagen)}}" alt="{{$servicio->titulo}}">
	                        @endif
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">{{$servicio->titulo}}</h5>
	                        <p>
	                            {!! $servicio->descripcion !!}
	                        </p>
	                    </div>
	                </div>
	            </div>
	        	@endforeach
	            
	            
	            
	        </div>
	    </div>

	</section>
@stop