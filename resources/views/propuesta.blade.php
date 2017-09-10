@extends('layout')

@section('content')
	<section class="article-single">
		<?=$breadcrumbs;?>
	    <div class="container">
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
	                <div class="article-body">
	                    <p class="lead">
	                        {!! $propuesta->texto_1 !!}
	                    </p>
	                
	                    <p>
	                        {!! $propuesta->texto_2 !!}
	                    </p>

	                    
	                    @if(Storage::disk('public')->exists($propuesta->imagen))
				            <figure>
		                        <img alt="Imagen Propuesta" src="{{ url('imagecache/largeimage/'.basename($propuesta->imagen)) }}">
		                    </figure>
				        @endif
				        
	                    
	                    <p>
	                        {!! $propuesta->texto_3 !!}
	                    </p>
	                    
	                </div><!--end of article body-->
	            </div>
	        </div><!--end of row-->
	        
	    </div><!--end of container-->   
	</section>
@stop