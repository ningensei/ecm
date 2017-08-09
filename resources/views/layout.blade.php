
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
				
		<div class="nav-container">
			<nav class="top-bar centered-logo">
				<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<span class="alt-font"><i class="icon icon_pin"></i> GRAL. GÜEMES 1645. FLORIDA</span>
								<span class="alt-font"><i class="icon icon_mail"></i> CONTACTO@ECMUSICA.COM.AR</span>
							
								
								<ul class="social-icons text-right">
									<!-- <li>
										<a href="#">
											<i class="icon social_twitter"></i>
										</a>
									</li> -->
							
									<li>
										<a href="#">
											<i class="icon social_facebook"></i>
										</a>
									</li>
							
									<!-- <li>
										<a href="#">
											<i class="icon social_dribbble"></i>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12 text-center">
							<img class="logo logo-light" alt="Logo" src="{{ URL::asset('/images/logo.png') }}">
							<img class="logo logo-dark" alt="Logo" src="{{ URL::asset('/images/logo.png') }}">
						</div>
					</div>
				
				
					<div class="row nav-menu">
					
						<div class="col-sm-12 columns text-center">
							<ul class="menu">
								<li><a href="#">LA ESCUELA</a></li>
								<li class="has-dropdown"><a href="#">CURSOS</a>
									<ul class="subnav">
										<li><a href="#">LENGUAJE MUSICAL</a></li>
										<li><a href="#">PRODUCCIÓN MUSICAL</a></li>
										<li><a href="#">COMPOSICIÓN Y ARMONÍA</a></li>
										<li><a href="#">CURSO DE RITMO</a></li>
										<li><a href="#">ENSAMBLES</a></li>
									</ul>
								</li>

								<li class="has-dropdown"><a href="#">CLASES</a>
									<div class="subnav subnav-fullwidth">
										<div class="col-md-3">
											<ul class="subnav">
												<li><a href="#">CANTO</a></li>
												<li><a href="#">GUIRARRA</a></li>
												<li><a href="#">BAJO</a></li>
												<li><a href="#">BATERÍA</a></li>
												<li><a href="#">PERCUSIÓN</a></li>
											</ul>	
										</div>
										
										<div class="col-md-3">
											<ul class="subnav">
												<li><a href="#">CELLO</a></li>
												<li><a href="#">CONTRABAJO</a></li>
												<li><a href="#">VIOLÍN</a></li>
												<li><a href="#">VIOLA</a></li>
												<li><a href="#">PIANO</a></li>
											</ul>	
										</div>
										
										<div class="col-md-3">
											<ul class="subnav">
												<li><a href="#">ARMÓNICA</a></li>
												<li><a href="#">ACORDEÓN A PIANO</a></li>
												<li><a href="#">BANDONEÓN</a></li>
												<li><a href="#">FLAUTA</a></li>
												<li><a href="#">UKELELE</a></li>
											</ul>	
										</div>
										
										<div class="col-md-3">
											<ul class="subnav">
												<li><a href="#">SAXO</a></li>
												<li><a href="#">CLARINETE</a></li>
												<li><a href="#">INICIACIÓN MUSICAL</a></li>
											</ul>	
										</div>
									</div>
								</li>

								<li><a href="#">SERVICIOS</a>
									<!-- <ul class="subnav">
										<li><a href="#">CLASES A DOMICILIO</a></li>
										<li><a href="#">CLASES A DISTANCIA</a></li>
										<li><a href="#">PRPERACIÓN PARA EXAMENS DE INGRESO</a></li>
										<li><a href="#">ASESORAMIENTO PARA COMPRA DE INSTRUMENTOS</a></li>
										<li><a href="#">TALLERES PARA EMPRESAS E INSTITUCIONES</a></li>
										<li><a href="#">MÚSICA PARA EVENTOS</a></li>
									</ul> -->
								</li>

								<li class="has-dropdown"><a href="#">GALERÍA</a>
									<ul class="subnav">
										<li><a href="#">FOTOS</a></li>
										<li><a href="#">VIDEOS</a></li>
									</ul>
								</li>

								<li><a href="#">CONTACTO</a></li>
								
								
								
							</ul>
		
						</div>
					</div>
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div>
				<div class="bottom-border"></div>
			</nav>
		
		</div>
		<div class="main-container">
			
			@yield('content')

		</div>
		<div class="footer-container">
			<footer class="bg-primary short-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="text-white">© 2017 ECM</span>
							<span class="text-white"><a href="#">contacto@ecmusica.com</a></span>
							<span class="text-white">+5411 4781-0620</span>
							<span class="text-white">GRAL. GUEMES 1645, FLORIDA</span>
						</div>
					</div><!--end for row-->
				</div><!--end of container-->
				
				<div class="contact-action">
					<div class="align-vertical">
						<i class="icon text-white icon_mail"></i>
						<a href="contact.html" class="text-white"><span class="text-white">Contáctanos aquí <i class="icon arrow_right"></i></span></a>
					</div>
				</div>
			</footer>
		</div>
				
		<script src="{{ URL::asset('/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('/js/jquery.plugin.min.js') }}"></script>
        <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
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
    </body>
</html>