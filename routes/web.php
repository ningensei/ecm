<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {


	/* -------------------------------------- */
	/*				  FRONTEND				  */
	/* -------------------------------------- */

	// Home

	Route::get('/', 'HomeController@index');

	// Propuesta

	Route::get('/propuesta', 'PropuestaController@index');

	// Profesores

	Route::get('/profesores', 'ProfesoresController@index');

	// Clases

	Route::get('clases/ver/{slug}', 'ClasesController@ver');

	// Cursos

	Route::get('/cursos/ver/{slug}', 'CursosController@ver');

	// Servicios

	Route::get('/servicios', 'ServiciosController@index');

	// Fotos

	Route::get('/fotos', 'FotosController@index');

	// Videos

	Route::get('/videos', 'VideosController@index');

	// Contacto

	Route::get('/contacto', 'ContactoController@index');

	// Eventos

	Route::get('/eventos', 'EventosController@index');
	
	
	/* -------------------------------------- */
	/*      Redirects Rutas anteriores	      */
	/* -------------------------------------- */

	# estáticas

	Route::get('/noticias.html', 'RedirectController@home');
	Route::get('/contacto.html', 'RedirectController@contacto');
	Route::get('/galeria_fotos.html', 'RedirectController@fotos');
	Route::get('/escuela_musica.html', 'RedirectController@propuesta');
	Route::get('/servicios.html', 'RedirectController@servicios');
	Route::get('/clases_domicilio.html', 'RedirectController@servicios');
	Route::get('/clases_grupales.html', 'RedirectController@servicios');
	Route::get('/clases_individuales.html', 'RedirectController@servicios');
	Route::get('/empresas.html', 'RedirectController@servicios');
	Route::get('/docentes.html', 'RedirectController@profesores');

	# dinámicas

	Route::get('/c_armonica.html', 'RedirectController@armonica');
	Route::get('/c_acordeon.html', 'RedirectController@acordeon');
	Route::get('/c_bajo.html', 'RedirectController@bajo');
	Route::get('/c_bateria.html', 'RedirectController@bateria');
	Route::get('/c_canto.html', 'RedirectController@canto');
	Route::get('/c_cello.html', 'RedirectController@cello');
	Route::get('/c_clarinete.html', 'RedirectController@clarinete');
	Route::get('/c_flauta.html', 'RedirectController@flauta');
	Route::get('/c_guitarra.html', 'RedirectController@guitarra');
	Route::get('/c_percu.html', 'RedirectController@percu');
	Route::get('/c_piano.html', 'RedirectController@piano');
	Route::get('/c_saxo.html', 'RedirectController@saxo');
	Route::get('/c_uke.html', 'RedirectController@ukelele');
	Route::get('/c_violin.html', 'RedirectController@violin');
	
	/* -------------------------------------- */
	/*				  BACKEND				  */
	/* -------------------------------------- */
	

	// Admin Interface Routes

	Route::get('/admin/login', 'Admin\LoginController@showLoginForm');


	Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
	{
		Route::get('dashboard', 'Admin\DashboardController@index');
		Route::get('/', 'Admin\DashboardController@index');
  			
	  	
	  	// Backpack\CRUD: Define the resources for the entities you want to CRUD.
	    CRUD::resource('clases', 'Admin\ClasesCrudController');
	    CRUD::resource('citas', 'Admin\CitasCrudController');
	    CRUD::resource('configuracion', 'Admin\ConfiguracionCrudController');
	    CRUD::resource('propuesta', 'Admin\PropuestaCrudController');
	    CRUD::resource('profesores', 'Admin\ProfesoresCrudController');
	    CRUD::resource('home', 'Admin\HomeCrudController');
	    CRUD::resource('cursos', 'Admin\CursosCrudController');
	    CRUD::resource('noticias', 'Admin\NoticiasCrudController');
	    CRUD::resource('servicios', 'Admin\ServiciosCrudController');
	    CRUD::resource('videos', 'Admin\VideosCrudController');
	    CRUD::resource('fotos', 'Admin\FotosCrudController');

	});

});
