<!DOCTYPE HTML>
<html>
	<head>
		<title>TEG | Trabajo en Gastronomía </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--[if lte IE 8]><script src="{{ URL::asset('/js/ie/html5shiv.js') }}"></script><![endif]-->
		<link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('/css/custom.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('/css/animate.css') }}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="{{ URL::asset('/css/ie9.css') }}" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ URL::asset('/css/ie8.css') }}" /><![endif]-->
		<link rel="stylesheet" href="{{ URL::asset('/dist/css/unslider.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/dist/css/unslider.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('/plugins/sweetalert-master/dist/sweetalert.css') }}">
		
	</head>
	<body>
		
		<!-- Header -->
			<header id="header">
				<h1><a href="<?php echo URL::to('/');?>">TEG | <span>Trabajo en Gastronomía</span></a></h1>
				<a href="<?php echo URL::to('/publicacion');?>">PUBLICAR</a>
				<a href="#menu">Menu</a>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="<?php echo URL::to('/empezar');?>">¿Como empezar?</a></li>
					<li><a href="#four" class="scrolly">Testimonios</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="<?php echo URL::to('/publicacion');?>" class="button fit special">PUBLICAR</a></li>
					
				</ul>
			</nav>



			@yield('content')


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<section class="about">
						<h4 class="major">Te contamos un poco de nosotros</h4>
						<p>Nos definimos como un grupo de profesionales gastronomicos que se dedica al aporte de  soluciones de distintos tipos y en distintos aspectos al mundo de la gastronomia. Aspiramos a formar parte de las herramientas que utilizas a diario para que tu negocio sea exitoso.<br><strong>Queremos ser parte.</strong>
						</p>
						
					</section>
					<section class="contact-info">
						<h4 class="major">Comunicate con nosotros</h4>
						<p>Mantengamos el contacto. ¿Que necesitas? Consultanos...</p>
						<ul class="contact">
							<li class="fa-envelope">consultas@teg.com</a></li>
							<li class="fa-envelope">soporte@teg.com</a></li>
							<li class="fa-envelope">pablo@teg.com</a></li>
							<li class="fa-envelope">seba@teg.com</a></li>
													
						</ul>
						<ul class="contact">
							<li class="fa-facebook"><a href="#">facebook.com/teg</a></li>
						</ul>
					</section>
				</div>
				<div class="copyright">
					<p>&copy; <strong>TEG</strong> | TRABAJO EN GASTRONOMIA | All rights reserved | <a href="<?php echo URL::to('/terminos');?>">Terminos y condiciones de uso.</a></p>
				</div>
			</footer>


		<!-- Scripts -->
			<script src="{{ URL::asset('/js/jquery.min.js') }}"></script>
			<script src="{{ URL::asset('/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ URL::asset('/js/skel.min.js') }}"></script>
			<script src="{{ URL::asset('/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="{{ URL::asset('/js/ie/respond.min.js') }}"></script><![endif]-->

			<script>
				jQuery(document).ready(function($) {
					$('.my-slider').unslider();
				});

				var baseURL = "<?php echo URL::to('/');?>";
				var currentPage = "<?php echo @$current;?>";
			</script>
			
			<script src="{{ URL::asset('/js/main.js') }}"></script>
			<script src="{{ URL::asset('/dist/js/unslider.min.js') }}"></script>
			<script src="{{ URL::asset('/plugins/sweetalert-master/dist/sweetalert-dev.js') }}"></script>

			@yield('scripts')

	</body>
</html>