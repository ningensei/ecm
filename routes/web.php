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
