@extends('layout')

@section('content')
	<section class="container videos">

		<?=$breadcrumbs;?>

	    <!-- Content -->
	    <div class="row">
	    	@foreach($videos as $video)
	        <div class="content col-md-6">
	            <article>
	                <header>
	                    <h2>{{$video->titulo}}</h2>
	                </header>

	                <iframe width="100%" height="300" src="{{$video->url}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 

	                {!! $video->descripcion !!}
	                
	            </article>
	        </div>
	        @endforeach
	    </div>
	    <div class="text-center">{{ $videos->links() }}</div>

	</section>
@stop