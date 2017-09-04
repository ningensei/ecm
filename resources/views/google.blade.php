@extends('layout')

@section('content')
<section class="contact-center">
	<?=$breadcrumbs;?>
	
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                <h1>Contáctanos</h1>
                <p class="lead">
                    {!! $configuracion->texto_contacto !!}
                </p>
            </div>
        </div>
        
        <div class="row" style="position: relative;">
        
             <iframe src="https://docs.google.com/forms/d/1epYiEEgiMWxSYAp69t6_MMchtuv-hi4E8R5XJBtCNw0/viewform?embedded=true" width="100%" height="1890px" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>

             <!-- <div class="coverform" style="
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 64px;
                background: #f4f4f4;
            "></div> -->

        </div><!-- ./row -->

    </div>
</section>
@stop