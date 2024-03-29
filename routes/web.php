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

Route::get('/', 'LandingController@index');

Route::get('showSliderContent/{id}', 'LandingController@showSliderContent');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/quienes-somos', 'SeccionController@quienes_somos');
Route::get('/donde-estamos', 'SeccionController@donde_estamos');
Route::get('/soluciones-financieras', 'SeccionController@soluciones_financieras');
Route::get('/contacto', 'SeccionController@contacto');
Route::get('/afiliate', 'SeccionController@afiliate');
Route::get('/blog', 'SeccionController@blog');
Route::get('/blog/{slug}', 'SeccionController@show_blog');
Route::get('/get_dependency/{state_id}', 'CotizadorController@get_dependency');
Route::get('/terminos-y-condiciones', 'SeccionController@terminos');
Route::get('/terminos-y-condiciones', 'SeccionController@terminos');
Route::get('/aviso-de-privacidad', 'SeccionController@aviso');
Route::get('/requisitos-de-contratacion', 'SeccionController@requisitos');
Route::get('/buro', 'SeccionController@buro');
Route::get( '/atencion-une', 'SeccionController@atencionUne');

Route::post('/solicita_informacion', 'SeccionController@solicita_informacion');

Route::group(['prefix' => 'admin'], function (){
    Route::resource('blog', 'Admin\BlogAController');
    Route::get('delete_portada/{id}', 'Admin\BlogAController@delete_portada');
    Route::get('delete_listado/{id}', 'Admin\BlogAController@delete_listado');
    Route::get('blog/highlight/{id}', 'Admin\BlogAController@highlight');
    Route::get('blog/unhighlight/{id}', 'Admin\BlogAController@unhighlight');

    Route::resource('slider', 'Admin\SliderController');
    Route::get('slider/icon/{id}/delete', 'Admin\SliderController@delete_icon');

    Route::resource('cat', 'Admin\LegendCatController');

    Route::resource('user', 'Admin\UserController');

});