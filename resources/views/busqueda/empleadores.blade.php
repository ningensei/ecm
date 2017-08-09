@extends('layout')

@section('content')

<!-- Buscador Empleo -->
<main>
	<section id="banner_empleo">
		<div class="inner">
			<h2 class="major special">COMENCEMOS CON LA BUSQUEDA</h2>
			<p>Elegí el puesto de trabajo que necesitás.</p>
			<form method="post" action="#">
				<!-- Break -->
					<div class="12u$">
						<div class="select-wrapper">
							<select name="categoria" id="categoria">
								<option value="">Seleccionar Categoría ...</option>
                                    <option value="todas">Todas las categorías</option>

                                    @foreach($categorias as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                                    @endforeach
								
							</select>
						</div>
					</div>
					<div class="12u$">
						<div class="select-wrapper">
							<select class="select1" name="puesto" id="puesto">
								<option value="0">Seleccionar Puesto ...</option>
								<option value="todos">Todos los puestos</option>
                                    @foreach($puestos as $puesto)
                                        <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
                                    @endforeach								
							</select>
							<div class="12u$">
								<ul class="actions">
									<li><a href="#" class="button special icon fa-search buscar evBuscar">buscar</a></li>
								</ul>
							</div>
						</div>
					</div>
										
			</form>
		</div>
	</section>
	
	<!-- Resultado de la busqueda -->
	<section id="empleo" style="padding: 0;" class="wrapper alt">
		
		<div class="row cont-empleado"></div>
        <div class="paginador"></div>	
	</section>
</main>

@stop

@section('scripts')

    <script type="text/javascript" src="{{ URL::asset('/js/busqueda.js') }}"></script>    

@stop
