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
	            <div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                        <img class="service-img" src="{{ asset('images/servicios/domicilio.png') }}" alt="domicilio">
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">Clases a domicilio</h5>
	                        <p>
	                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
	                        </p>
	                    </div>
	                </div>
	            </div>
	            
	            <div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                        <img class="service-img" src="{{ asset('images/servicios/distancia.png') }}" alt="distancia">
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">Clases a distancia</h5>
	                        <p>
	                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
	                        </p>
	                    </div>
	                </div>
	            </div>
	            
	            <div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                        <img class="service-img" src="{{ asset('images/servicios/examenes.png') }}" alt="examenes">
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">Preparación para exámenes e ingresos</h5>
	                        <p>
	                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
	                        </p>
	                    </div>
	                </div>
	            </div>
	            
	            <div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                        <img class="service-img" src="{{ asset('images/servicios/instrumentos.png') }}" alt="instrumentos">
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">Asesoramiento para compra de instrumentos</h5>
	                        <p>
	                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
	                        </p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                        <img class="service-img" src="{{ asset('images/servicios/talleres.png') }}" alt="talleres">
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">Talleres para empresas e instituciones</h5>
	                        <p>
	                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
	                        </p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                        <img class="service-img" src="{{ asset('images/servicios/conciertos.png') }}" alt="conciertos">
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">Conciertos didácticos</h5>
	                        <p>
	                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
	                        </p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-sm-6">
	                <div class="feature feature-icon-large">
	                    <div class="pull-left text-center">
	                        <img class="service-img" src="{{ asset('images/servicios/eventos.png') }}" alt="eventos">
	                    </div>
	                    <div class="pull-right">
	                        <h5 class="brown">Música para eventos</h5>
	                        <p>
	                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
	                        </p>
	                    </div>
	                </div>
	            </div>
	            
	        </div>
	    </div>

	</section>
@stop