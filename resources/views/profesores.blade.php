@extends('layout')

@section('content')
   <section class="pure-text-centered">
        <?=$breadcrumbs;?>
        <div class="container">
           <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                    
                    <h1><strong>Profesores</strong></h1>
                    <p class="lead">
                        {!! $profesores->texto !!}
                    </p>
                </div>

                @if(Storage::disk('public')->exists($profesores->imagen))
                <div class="imagen-profesores col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                    <div>
                        <figure>
                            <img alt="Imagen Propuesta" src="{{ asset('storage/'.$profesores->imagen) }}">
                        </figure>
                    </div>
                </div>
                @endif

                
            </div><!--end of row-->


        </div><!--end of container-->
    </section>

@stop