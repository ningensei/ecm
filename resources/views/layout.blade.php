
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Escuela creativa de musica | Zona Norte</title>
        <meta name="description" content="Escuela de música. Todos los instrumentos en Vicente Lopez, Zona Norte">
      
        <meta name="keywords" content="Estudiar piano canto guitarra bajo violin audio clases de musica extracurriculares produccion musical clarinete saxo | Bateria | Percu | Canto | Cello | Violin | Acordeon | Saxo | Clarinete | Flauta | Armonica">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ URL::asset('/css/flexslider.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ URL::asset('/css/line-icons.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/simple-line-icons.css') }}">
        <link href="{{ URL::asset('/css/elegant-icons.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ URL::asset('/css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="{{ URL::asset('/css/theme-tronic.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ URL::asset('/css/custom.css') }}" rel="stylesheet" type="text/css" media="all"/>

        @if(Storage::disk('public')->exists($configuracion->favicon))
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/'.$configuracion->favicon) }}"/>
        @endif
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="{{ URL::asset('/js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    </head>
    <body id="{{ isset($current)?$current:'' }}">
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
		
        @if(isset($current) and $current == 'home')

            @include('nav_home')

        @else

            @include('nav_sections')

        @endif

        
		<div class="main-container {{ $current?$current.'-container':''}}">

			@yield('content')

		</div>

		<div class="footer-container">
			<footer class="bg-primary short-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-10">
							<span class="text-white">© 2017 ECM</span>
							<span class="text-white"><a href="#">{{$configuracion->email}}</a></span>
							<span class="text-white">{{$configuracion->telefono}}</span>
							<span class="text-white">{{$configuracion->direccion}}</span>
						</div>
					</div><!--end for row-->
				</div><!--end of container-->
				
				<div class="contact-action">
					<div class="align-vertical">
						<i class="icon text-white icon_mail"></i>
						<a href="{{URL::to('contacto')}}" class="text-white"><span class="text-white">Contáctanos aquí <i class="icon arrow_right"></i></span></a>
					</div>
				</div>
			</footer>
		</div>
				
		<script src="{{ URL::asset('/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('/js/jquery.plugin.min.js') }}"></script>
        <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>

        @if(isset($js))
            @foreach($js as $js_asset)
            <script src="{{ URL::asset('/js/'.$js_asset) }}"></script>
            @endforeach
        @endif

        <script src="{{ URL::asset('/js/jquery.flexslider-min.js') }}"></script>
        <script src="{{ URL::asset('/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ URL::asset('/js/skrollr.min.js') }}"></script>
        <script src="{{ URL::asset('/js/spectragram.min.js') }}"></script>
        <script src="{{ URL::asset('/js/scrollReveal.min.js') }}"></script>
        <script src="{{ URL::asset('/js/isotope.min.js') }}"></script>
        <script src="{{ URL::asset('/js/twitterFetcher_v10_min.js') }}"></script>
        <script src="{{ URL::asset('/js/lightbox.min.js') }}"></script>
        <script src="{{ URL::asset('/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ URL::asset('/js/scripts.js') }}"></script>
        <script src="{{ URL::asset('/js/main.js') }}"></script>

    </body>
</html>